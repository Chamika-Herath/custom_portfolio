<?php
include_once 'imports/Company_Info/Company_Info_Variable_List.php';
$company_info = new Company_Info_Variable_List();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Meta_Tag/Meta_Tag.php'; ?>
</head>
<body>
    <?php
    include_once './UxUI-Back/Needs/header.php';
    include "UxUI-Back/Homepage/hero.php";
    include "UxUI-Back/Homepage/sectors.php";
    include "UxUI-Back/Homepage/arsenal.php";
    include "UxUI-Back/Homepage/protocol.php";
    include "UxUI-Back/Homepage/telemetry.php";
    include_once './UxUI-Back/Needs/footer.php';
    ?>
</body>
</html>
