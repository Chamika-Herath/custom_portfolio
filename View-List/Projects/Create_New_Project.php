<?php
$response_array = array();

// Adjust these require paths based on Heraforce framework depths
if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }
include_once('../../imports/need/DB.php'); 

include_once('../../Controllers/projects/projects_ADD_UPDATE.php');
include_once('../../Controllers/projects_img/projects_img_ADD_UPDATE.php');
include_once('../../Controllers/project_feaures/project_feaures_ADD_UPDATE.php');

$main_user_login_id = "1"; 

// Capture Project Variables
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

$image_path = "0";

// Handle Project Cover Upload
if (isset($_FILES['image_uploder_image']) && $_FILES['image_uploder_image']['error'] === UPLOAD_ERR_OK) {
    $file_name = time() . "_" . uniqid() . "_" . basename($_FILES['image_uploder_image']['name']);
    $upload_dir = '../../Assets/Project_Covers/';
    if (!file_exists($upload_dir)) { mkdir($upload_dir, 0777, true); }
    
    if (move_uploaded_file($_FILES['image_uploder_image']['tmp_name'], $upload_dir . $file_name)) {
        $image_path = 'Assets/Project_Covers/' . $file_name;
    } else {
        $response_array[] = array("error" => "Cover upload failed.", "id" => "0");
        echo json_encode($response_array);
        exit;
    }
}

// 1. Process Core Project Hub Insertion
$base_project_id = 0;
try {
    $project_obj = new projects_ADD_UPDATE($main_user_login_id);
    // Signature: get_data($name, $description, $main_description, $client, $main_img, $show_on_web)
    $project_obj->get_data($val_name, $val_description, $val_main_description, $val_client, $image_path, $val_show);
    
    $project_obj->set_project_url($val_project_url);
    $project_obj->set_seo_keywords($val_seo_keywords);
    $project_obj->set_seo_description($val_seo_description);
    $project_obj->set_main_color($val_main_color);
    $project_obj->set_secondary_color($val_secondary_color);
    
    if ($project_obj->process_new_record()) {
        $base_project_id = $project_obj->get_id();
    } else {
        $response_array[] = array("error" => "DB Error: " . $project_obj->get_error(), "id" => "0");
        echo json_encode($response_array);
        exit;
    }
} catch(Exception $e) {
    $response_array[] = array("error" => "Controller exception: " . $e->getMessage(), "id" => "0");
    echo json_encode($response_array);
    exit;
}

// 2. Loop Through Dynamic Gallery (projects_img)
if(isset($_FILES['gallery_files'])) {
    $upload_dir_gallery = '../../Assets/Project_Gallery/';
    if (!file_exists($upload_dir_gallery)) { mkdir($upload_dir_gallery, 0777, true); }

    $file_count = count($_FILES['gallery_files']['name']);
    for($i = 0; $i < $file_count; $i++) {
        if($_FILES['gallery_files']['error'][$i] === UPLOAD_ERR_OK) {
            $g_file = time() . "_" . uniqid() . "_" . basename($_FILES['gallery_files']['name'][$i]);
            
            if(move_uploaded_file($_FILES['gallery_files']['tmp_name'][$i], $upload_dir_gallery . $g_file)) {
                
                $gallery_path = 'Assets/Project_Gallery/' . $g_file;
                
                // Inject dynamically into projects_img table
                $img_obj = new projects_img_ADD_UPDATE($main_user_login_id);
                // get_data($img_url, $dis, $projects_id)
                $img_obj->get_data($gallery_path, "Gallery Asset", $base_project_id);
                $img_obj->process_new_record();
            }
        }
    }
}

// 3. Process Dynamic Repeating Features (project_feaures)
if(isset($_POST['features_json'])) {
    $feature_array = json_decode($_POST['features_json'], true);
    
    if(is_array($feature_array)) {
        
        $upload_dir_features = '../../Assets/Project_Features/';
        if (!file_exists($upload_dir_features)) { mkdir($upload_dir_features, 0777, true); }
        
        foreach($feature_array as $feature) {
            $f_name = $feature['name'];
            $f_desc = $feature['desc'];
            $file_key = $feature['fileKey'];
            
            $f_image_path = "0";
            
            if(isset($_FILES[$file_key]) && $_FILES[$file_key]['error'] === UPLOAD_ERR_OK) {
                $f_file = time() . "_" . uniqid() . "_" . basename($_FILES[$file_key]['name']);
                if(move_uploaded_file($_FILES[$file_key]['tmp_name'], $upload_dir_features . $f_file)) {
                    $f_image_path = 'Assets/Project_Features/' . $f_file;
                }
            }
            
            // Inject dynamically into project_feaures table
            $feat_obj = new project_feaures_ADD_UPDATE($main_user_login_id);
            // get_data($feature_name, $feature_dis, $feture_img, $projects_id)
            $feat_obj->get_data($f_name, $f_desc, $f_image_path, $base_project_id);
            $feat_obj->process_new_record();
        }
    }
}

$response_array[] = array("error" => "0", "id" => $base_project_id);
echo json_encode($response_array);
?>
