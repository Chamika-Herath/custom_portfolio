<?php
// Core Data Base Include
include_once('../../imports/need/DB.php');
include_once('../../Controllers/projects/projects_LIST.php');

$projects_obj = new projects_LIST();
$result = $projects_obj->get_all_data()->set_data_limits(0, 50)->get_result();

if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        $title = $row['name'] ? $row['name'] : "Unnamed Project";
        $tech = $row['client'] ? $row['client'] : "Pending Architecture";
        
        // Ensure image paths map correctly assuming injection into UxUI-Back/my_admin/my_admin_02_my_projects/
        $img = ($row['main_img'] != "0" && $row['main_img'] != "") ? "../../../" . $row['main_img'] : "../../../assets/images/placeholder1.png";
        
        if($row['show_on_web'] == "1") {
            $status_token = '<span class="hera-status-active">Yes</span>';
        } else {
            $status_token = '<span class="hera-status-draft">No</span>';
        }
        
        echo '
        <tr>
            <td><img src="' . htmlspecialchars($img) . '" alt="Thumb" class="hera-project-thumb" onerror="this.style.background=\'var(--hera-border)\'"></td>
            <td>
              <span class="hera-project-title">' . htmlspecialchars($title) . '</span>
              <span class="hera-project-tech">' . htmlspecialchars($tech) . '</span>
            </td>
            <td>' . $status_token . '</td>
            <td style="text-align: right;">
              <svg onclick="if(typeof my_admin_02_C_OPEN === \'function\'){ my_admin_02_C_OPEN(\'' . $row['id'] . '\'); }" class="hera-action-dots" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:12px;"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
            </td>
        </tr>';
    }
} else {
    echo '<tr><td colspan="4" style="text-align:center; padding: 40px; color:rgba(255,255,255,0.5);">No Active Projects Detected in Matrix.</td></tr>';
}
?>
