<?php
$response_array = array();

if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }
include_once('../../imports/need/DB.php'); 

include_once('../../Controllers/projects/projects_SINGLE_DATA.php');
include_once('../../Controllers/projects_img/projects_img_LIST.php');
include_once('../../Controllers/project_feaures/project_feaures_LIST.php');

$main_user_login_id = "1"; 
$project_id = isset($_POST['id']) ? $_POST['id'] : "0";

if($project_id == "0") {
    $response_array[] = array("error" => "Critical: Invalid Document ID parameter.");
    echo json_encode($response_array);
    exit;
}

try {
    // 1. Core Data
    $single_project = new projects_SINGLE_DATA($project_id);
    
    $project_payload = array(
        "id" => $project_id,
        "name" => $single_project->get_name(),
        "client" => $single_project->get_client(),
        "main_desc" => $single_project->get_main_description(),
        "long_desc" => $single_project->get_description(),
        "main_img" => $single_project->get_main_img(),
        "show_on_web" => $single_project->get_show_on_web(),
        "project_url" => $single_project->get_project_url(),
        "seo_keywords" => $single_project->get_seo_keywords(),
        "seo_description" => $single_project->get_seo_description(),
        "main_color" => $single_project->get_main_color(),
        "secondary_color" => $single_project->get_secondary_color()
    );

    // 2. Gallery Data
    $gallery_list = new projects_img_LIST();
    $res_gallery = $gallery_list->get_all_data()->filter_by_project($project_id)->get_result();
    
    $gallery_array = array();
    if($res_gallery && $res_gallery->num_rows > 0) {
        while($g_row = $res_gallery->fetch_assoc()) {
            $gallery_array[] = array(
                "id" => $g_row['id'],
                "img_url" => $g_row['img_url']
            );
        }
    }

    // 3. Feature Data
    $feat_list = new project_feaures_LIST();
    $res_features = $feat_list->get_all_data()->filter_by_project($project_id)->get_result();
    
    $features_array = array();
    if($res_features && $res_features->num_rows > 0) {
        while($f_row = $res_features->fetch_assoc()) {
            $features_array[] = array(
                "id" => $f_row['id'],
                "name" => $f_row['feature_name'],
                "desc" => $f_row['feature_dis'],
                "img" => $f_row['feture_img']
            );
        }
    }

    // Synthesis
    $response_array[] = array(
        "error" => "0",
        "core" => $project_payload,
        "gallery" => $gallery_array,
        "features" => $features_array
    );

} catch(Exception $e) {
    $response_array[] = array("error" => "Exception Map: " . $e->getMessage());
}

echo json_encode($response_array);
?>
