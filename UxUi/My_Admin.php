<?php 
include_once '../imports/need/session_setup.php';
include_once '../imports/need/DB.php';
include_once '../Controllers/Main/Cook_Managment/Cook_Managing.php';

?>





<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</head>

<body>


<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            my_admin_close_all();
            my_admin_01_A_OPEN();
        });
    </script>

    
        
        <?php 
        include_once '../imports/need/DB.php';
        include_once '../Controllers/Main/Cook_Managment/Cook_Managing.php';
        include_once '../UxUI-Back/Includes/Sidebar-loader.php';

        

        include_once '../UxUI-Back/Needs/Check_User_Login.php';

        if (!isset($user_id) || empty($user_id)) {
            echo "<script>window.location.href = '../UxUi/Main/User-Login.php';</script>";
            exit;
        }
        
        //include_once '../UxUI-Back/Needs/Collection_dashboard_Pre_loader.php';
        ?>
        
            <?php

            include_once '../UxUI-Back/my_admin/my_admin_JS.php';
            include_once '../UxUI-Back/my_admin/my_admin_01/my_admin_01.php';

            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/my_admin_02_A_my_projects_list.php';
            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/my_admin_02_B_add_new_project.php';
            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/my_admin_02_C_edit_project.php';
            include_once '../UxUI-Back/my_admin/my_admin_03_my_blogs/my_admin_03_A_my_blogs.php';
            include_once '../UxUI-Back/my_admin/my_admin_03_my_blogs/my_admin_03_B_add_new_blog.php';
            include_once '../UxUI-Back/my_admin/my_admin_03_my_blogs/my_admin_03_edit_blogs.php';

            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/JS/my_admin_02_A_JS.php';
            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/JS/my_admin_02_B_JS.php';
            include_once '../UxUI-Back/my_admin/my_admin_02_my_projects/JS/my_admin_02_C_JS.php';
           


            ?>

        <?php 
        
        //include_once '../includes/footer2.php'; 
        
        ?>
</body>

</html>