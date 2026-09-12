<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$online_offline_extention = ".php";
// Global configuration for Localhost vs Production URLs
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    $online_offline_extention = ".php";
    $home_link = "index.php";
} else {
    $online_offline_extention = ""; // Clean URLs for production via .htaccess
    $home_link = "./";
}
?>


