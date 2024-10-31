<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';
require_once 'imagecontroller.class.php';
session_start();

$projectID = $_POST['projectID'];
$title = $_POST['title'];
$description = $_POST['description'];
$skills = $_POST['checks']; // 'checks' contains selected skills from checkboxes

$errorMessage = new ErrorHandler();

$imageCheck = new ImageController();
$imagePath = $imageCheck->ImageUploader();

// Proceed only if no errors
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
