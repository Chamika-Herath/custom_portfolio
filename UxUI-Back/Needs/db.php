<?php
// Hostinger Database Configuration
$host = 'localhost'; // Usually localhost for Hostinger
$db_name = 'u123456789_portfolio'; // Replace with your actual DB name
$username = 'u123456789_herath'; // Replace with your actual DB username
$password = 'Your_Secure_Password_123'; // Replace with your actual DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Silence error for production, but log it
    // die("Connection failed: " . $e->getMessage());
    error_log($e->getMessage());
}
?>


