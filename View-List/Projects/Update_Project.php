<?php
$response_array = array();

if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }
include_once('../../imports/need/DB.php'); 

include_once('../../Controllers/projects/projects_ADD_UPDATE.php');
include_once('../../Controllers/projects_img/projects_img_ADD_UPDATE.php');
include_once('../../Controllers/project_feaures/project_feaures_ADD_UPDATE.php');

$main_user_login_id = "1"; 

$project_id = isset($_POST['id']) ? $_POST['id'] : "0";
$val_name = isset($_POST['val_name']) ? $_POST['val_name'] : "";
$val_description = isset($_POST['val_description']) ? $_POST['val_description'] : "";
$val_main_description = isset($_POST['val_main_description']) ? $_POST['val_main_description'] : "";
$val_client = isset($_POST['val_client']) ? $_POST['val_client'] : "";
$val_show = isset($_POST['val_show']) ? $_POST['val_show'] : "1";
$val_project_url = isset($_POST['val_project_url']) ? $_POST['val_project_url'] : "";
$val_seo_keywords = isset($_POST['val_seo_keywords']) ? $_POST['val_seo_keywords'] : "";
$val_seo_description = isset($_POST['val_seo_description']) ? $_POST['val_seo_description'] : "";
$val_main_color = isset($_POST['val_main_color']) ? $_POST['val_main_color'] : "";
$val_secondary_color = isset($_POST['val_secondary_color']) ? $_POST['val_secondary_color'] : "";

if($project_id == "0") {
    $response_array[] = array("error" => "Critical: Project ID undefined.", "id" => "0");
    echo json_encode($response_array);
    exit;
}

try {
    $project_obj = new projects_ADD_UPDATE($main_user_login_id);
    $project_obj->set_id($project_id);
    
    // Process Core Updates Only For Submitted Data
    $project_obj->set_name($val_name);
    $project_obj->set_description($val_description);
    $project_obj->set_main_description($val_main_description);
    $project_obj->set_client($val_client);
    $project_obj->set_show_on_web($val_show);
    $project_obj->set_project_url($val_project_url);
    $project_obj->set_seo_keywords($val_seo_keywords);
    $project_obj->set_seo_description($val_seo_description);
    $project_obj->set_main_color($val_main_color);
    $project_obj->set_secondary_color($val_secondary_color);
    
    // Cover Image override ONLY if included in payload
    if (isset($_FILES['image_uploder_image']) && $_FILES['image_uploder_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../../Assets/Project_Covers/';
        if (!file_exists($upload_dir)) { mkdir($upload_dir, 0777, true); }
        
        $file_name = time() . "_" . uniqid() . "_" . basename($_FILES['image_uploder_image']['name']);
        $target_file = $upload_dir . $file_name;
        
        if (move_uploaded_file($_FILES['image_uploder_image']['tmp_name'], $target_file)) {
            $project_obj->set_main_img('Assets/Project_Covers/' . $file_name);
        }
    } else if (isset($_POST['nuke_main_cover']) && $_POST['nuke_main_cover'] == '1') {
        $db_nuke = new DataBase();
        $db_nuke->get_result("UPDATE projects SET main_img='0' WHERE id='" . $project_id . "'");
    }
    
    // Execute Primary Update
    if (!$project_obj->process_update()) {
        $response_array[] = array("error" => "DB Error: " . $project_obj->get_error_msg(), "id" => "0");
        echo json_encode($response_array);
        exit;
    }

    // 2. Sync Gallery Layout (Kept Images and New Data)
    $db_eraser = new DataBase();
    $db_eraser->get_result("DELETE FROM projects_img WHERE projects_id='" . $project_id . "'");
    
    // Process kept existing images
    if(isset($_POST['kept_gallery'])) {
        $kept_urls = json_decode($_POST['kept_gallery'], true);
        if(is_array($kept_urls)) {
            foreach($kept_urls as $url) {
                $img_obj = new projects_img_ADD_UPDATE($main_user_login_id);
                $img_obj->get_data($url, "Gallery Asset", $project_id);
                $img_obj->process_new_record();
            }
        }
    }
    
    // Process new local files
    if(isset($_FILES['gallery_files']) && !empty($_FILES['gallery_files']['name'][0])) {
        $upload_dir_gallery = '../../Assets/Project_Gallery/';
        if (!file_exists($upload_dir_gallery)) { mkdir($upload_dir_gallery, 0777, true); }
    
        $file_count = count($_FILES['gallery_files']['name']);
        for($i = 0; $i < $file_count; $i++) {
            if($_FILES['gallery_files']['error'][$i] === UPLOAD_ERR_OK) {
                $g_file = time() . "_" . uniqid() . "_" . basename($_FILES['gallery_files']['name'][$i]);
                if(move_uploaded_file($_FILES['gallery_files']['tmp_name'][$i], $upload_dir_gallery . $g_file)) {
                    $img_obj = new projects_img_ADD_UPDATE($main_user_login_id);
                    $img_obj->get_data('Assets/Project_Gallery/' . $g_file, "Gallery Asset", $project_id);
                    $img_obj->process_new_record(); // Appends linearly 
                }
            }
        }
    }

    // 3. Process Dynamic Repeating Features
    if(isset($_POST['features_json'])) {
        $feature_array = json_decode($_POST['features_json'], true);
        if(is_array($feature_array)) {
            // Overwrite existing features. Nuke the old ones natively.
            $db_eraser_feat = new DataBase();
            $db_eraser_feat->get_result("DELETE FROM project_feaures WHERE projects_id='" . $project_id . "'");
            
            $upload_dir_features = '../../Assets/Project_Features/';
            if (!file_exists($upload_dir_features)) { mkdir($upload_dir_features, 0777, true); }
            
            foreach($feature_array as $feature) {
                $f_name = $feature['name'];
                $f_desc = $feature['desc'];
                $file_key = $feature['fileKey'];
                
                $f_image_path = isset($feature['originalImg']) ? $feature['originalImg'] : "0";
                
                if(isset($_FILES[$file_key]) && $_FILES[$file_key]['error'] === UPLOAD_ERR_OK) {
                    $f_file = time() . "_" . uniqid() . "_" . basename($_FILES[$file_key]['name']);
                    if(move_uploaded_file($_FILES[$file_key]['tmp_name'], $upload_dir_features . $f_file)) {
                        $f_image_path = 'Assets/Project_Features/' . $f_file;
                    }
                }
                
                $feat_obj = new project_feaures_ADD_UPDATE($main_user_login_id);
                $feat_obj->get_data($f_name, $f_desc, $f_image_path, $project_id);
                $feat_obj->process_new_record(); // Appends linearly as completely new rows
            }
        }
    }

} catch(Exception $e) {
    $response_array[] = array("error" => "Edit exception array: " . $e->getMessage(), "id" => "0");
    echo json_encode($response_array);
    exit;
}

$response_array[] = array("error" => "0", "id" => $project_id);
echo json_encode($response_array);
?>
