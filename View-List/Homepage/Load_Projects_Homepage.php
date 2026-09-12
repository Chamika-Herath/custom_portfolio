<?php
$response_array = array();

// Bootstrapping DB Connections natively relative to View-List schema.
if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }
include_once('../../imports/need/DB.php'); 

include_once('../../Controllers/projects/projects_LIST.php');

try {
    $project_list = new projects_LIST();
    $result = $project_list->get_all_data()->filter_by_show_on_web("1")->set_data_limits(0, 7)->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $response_array[] = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "client" => $row['client'],
                "description" => $row['description'],
                "main_description" => $row['main_description'],
                "main_img" => $row['main_img'],
                "project_url" => isset($row['project_url']) ? $row['project_url'] : "",
                "main_color" => isset($row['main_color']) ? $row['main_color'] : "#000000",
                "secondary_color" => isset($row['secondary_color']) ? $row['secondary_color'] : "#ffffff"
            );
        }
    }
} catch (Exception $e) {
    // Failsafe empty return
}

echo json_encode($response_array);
?>
