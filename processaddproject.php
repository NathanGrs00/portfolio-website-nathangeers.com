<?php
require_once 'classes/formvalidator.class.php';
require_once 'classes/errorhandler.class.php';
require_once 'controllers/projectcontroller.class.php';

$errorMessage = new ErrorHandler();
$isValid = new FormValidator();
$newProject = new ProjectController();

if (!isset($_POST['Submit'])) {
    $errorMessage->showError('Oops, something went wrong!');
    exit();
}

// Validate the form
if (!$isValid->validateForm()){
    $errorMessage->showError('Oops, something went wrong!');
    exit();
}

$newProject->addProject();