<?php
$response_array = array();

// Security checks / Session validates can be required here globally:
if(file_exists('../../Controllers/Main/User_Accout_Check.php')) { include_once('../../Controllers/Main/User_Accout_Check.php'); }

// 1. Establish Target Folder from Payload (or default fallback)
$target_folder_route = isset($_POST['target_folder']) ? $_POST['target_folder'] : "Assets/Global_Uploads/";

// Sanitize route to prevent directory traversal
$target_folder_route = str_replace(array("../", "..\\", "./", ".\\"), "", $target_folder_route);

// Base directory path anchoring 
// It pushes out 2 directories because this API is inside View-List/Global_Uploader/
$base_anchor = "../../"; 
$upload_dir = $base_anchor . $target_folder_route;

// Ensure trailing slash
if (substr($upload_dir, -1) !== '/') {
    $upload_dir .= '/';
}

if (substr($target_folder_route, -1) !== '/') {
    $target_folder_route .= '/';
}

// Ensure the directory structure exists
if (!file_exists($upload_dir)) {
    if (!mkdir($upload_dir, 0777, true)) {
        $response_array[] = array("error" => "Critical: Server failed to generate target directory.", "img_path" => "0");
        echo json_encode($response_array);
        exit;
    }
}

// 2. Safely Process and Move File
if (isset($_FILES['global_image']) && $_FILES['global_image']['error'] === UPLOAD_ERR_OK) {
    
    $temp_name = $_FILES['global_image']['tmp_name'];
    $file_size = $_FILES['global_image']['size'];
    $file_type = mime_content_type($temp_name);
    
    // Safety Array
    $allowed_types = ['image/jpeg', 'image/png', 'image/webp', 'image/gif', 'image/svg+xml'];
    $max_size = 10 * 1024 * 1024; // 10 MB Max Global Upload Size
    
    if (!in_array($file_type, $allowed_types)) {
        $response_array[] = array("error" => "Invalid File Format. Please upload an image.", "img_path" => "0");
        echo json_encode($response_array);
        exit;
    }
    
    if ($file_size > $max_size) {
        $response_array[] = array("error" => "File exceeds 10MB limit.", "img_path" => "0");
        echo json_encode($response_array);
        exit;
    }
    
    // Assemble Unique Nomenclature
    $file_name = time() . "_" . uniqid() . "_" . basename($_FILES['global_image']['name']);
    $file_name = str_replace(" ", "-", $file_name); // Clean spaces
    
    $target_file = $upload_dir . $file_name;
    
    // Save to Disk
    if (move_uploaded_file($temp_name, $target_file)) {
        // Return structured clean path for database insertion
        $db_friendly_path = $target_folder_route . $file_name;
        
        $response_array[] = array("error" => "0", "img_path" => $db_friendly_path);
    } else {
        $response_array[] = array("error" => "Critical Server Error: Unable to move file data to disk.", "img_path" => "0");
    }
    
} else {
    // Determine the upload error
    $err_code = isset($_FILES['global_image']['error']) ? $_FILES['global_image']['error'] : 'NULL_FILE_PAYLOAD';
    $response_array[] = array("error" => "No valid file received or file corrupted. Code: " . $err_code, "img_path" => "0");
}

echo json_encode($response_array);
?>
