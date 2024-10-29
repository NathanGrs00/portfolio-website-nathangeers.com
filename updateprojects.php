<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';
session_start();

// Retrieve POST data
$projectID = $_POST['projectID'] ?? null;
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$skills = $_POST['checks'] ?? []; // 'checks' contains selected skills from checkboxes

$imagePath = null;

$errorMessage = new ErrorHandler();

/// Check if an image file was uploaded and if it's safe to move
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $uploadedFile = $_FILES['image'];
    $fileName = basename($uploadedFile['name']);
    $fileTmpPath = $uploadedFile['tmp_name'];
    $fileType = $uploadedFile['type'];
    $fileSize = $uploadedFile['size'];

    // Define the path where the file will be saved
    $uploadDir = 'img/uploads/';
    $imagePath = $uploadDir . $fileName;

    // Check if the file type is an image and the file size is valid
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($fileType, $allowedTypes) || $fileSize >= 5000000) { // 5MB limit
        echo $errorMessage->showError("Invalid file type or file too large.");
        exit(); // Exit if the file type is invalid or the size exceeds limit
    }

    // Move the uploaded file to the designated directory
    if (!move_uploaded_file($fileTmpPath, $imagePath)) {
        echo $errorMessage->showError("Error moving the uploaded file.");
        exit(); // Exit if the move operation fails
    }
}


//Loops through each project.
foreach ($_SESSION['projects'] as $project) {
    if ($project->getId() == $projectID) {  // Find project by stored ID.
        // Update the project fields.
        $project->setTitle($title);
        $project->setDescription($description);
        $project->setSkills($skills);

        if ($imagePath) {
            $project->setImage($imagePath);  // Update the image if provided.
        }

        echo $errorMessage->showError("Project updated successfully!");
        break;
    }
}