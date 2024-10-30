<?php
require_once 'project.class.php';
require_once 'formvalidator.class.php';
require_once 'errorhandler.class.php';
require_once 'imagecontroller.class.php';
session_start();

$errorMessage = new ErrorHandler();

if (!isset($_POST['Submit'])) {
    echo $errorMessage->showError('Oops, something went wrong!');
}

$isValid = new FormValidator();

// Validate the form
if ($isValid->validateForm("project")) {
    $id = count($_SESSION['projects']) + 1;

    $imageUploader = new ImageController();
    $destinationPath = $imageUploader->ImageUploader();

    // Create a new Project instance with the image path
    $singleProject = new Project($id, $_POST["title"], $_POST["description"], $_POST["checks"], $destinationPath);
    $_SESSION['projects'][] = $singleProject;
    header('Location: projects.php');
}else{
    header('Location: popups.php');
}