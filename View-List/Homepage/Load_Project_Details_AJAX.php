<?php
$project_id = isset($_POST['id']) ? $_POST['id'] : (isset($_GET['id']) ? $_GET['id'] : "");
$response = array("error" => true, "message" => "Missing or Invalid ID");

if ($project_id) {
    if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }
    include_once('../../imports/need/DB.php'); 
    include_once('../../Controllers/projects/projects_SINGLE_DATA.php');
    include_once('../../Controllers/projects_img/projects_img_LIST.php');
    include_once('../../Controllers/project_feaures/project_feaures_LIST.php');

    $project = new projects_SINGLE_DATA($project_id);
    if($project->get_state_of_data()) {
        $response = array("error" => false, "core" => array(), "features" => array(), "gallery" => array());
        
        $response["core"] = array(
            "name" => $project->get_name(),
            "client" => $project->get_client(),
            "description" => $project->get_description(),
            "main_description" => $project->get_main_description(),
            "project_url" => $project->get_project_url(),
            "main_img" => ($project->get_main_img() && $project->get_main_img() != "0") ? $project->get_main_img() : 'assets/images/placeholder.png',
            "main_color" => ($project->get_main_color() && $project->get_main_color() != "#000000") ? $project->get_main_color() : 'var(--primary)',
            "secondary_color" => ($project->get_secondary_color() && $project->get_secondary_color() != "#000000") ? $project->get_secondary_color() : 'var(--bg-main)'
        );
        
        $feat_list = new project_feaures_LIST();
        $res_features = $feat_list->get_all_data()->filter_by_project($project_id)->get_result();
        if($res_features && $res_features->num_rows > 0) {
            while($f_row = $res_features->fetch_assoc()) {
                $response["features"][] = array(
                    "feature_name" => $f_row['feature_name'],
                    "feature_dis" => $f_row['feature_dis'],
                    "feture_img" => ($f_row['feture_img'] && $f_row['feture_img'] != "0") ? $f_row['feture_img'] : 'assets/images/placeholder.png'
                );
            }
        }
        
        $gallery_list = new projects_img_LIST();
        $res_gallery = $gallery_list->get_all_data()->filter_by_project($project_id)->get_result();
        if($res_gallery && $res_gallery->num_rows > 0) {
            while($g_row = $res_gallery->fetch_assoc()) {
                $response["gallery"][] = array("img_url" => $g_row['img_url']);
            }
        }
    }
}
echo json_encode($response);
?>
