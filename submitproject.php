<?php
require_once 'formvalidator.class.php';
require_once 'errorhandler.class.php';
require_once 'projectcontroller.class.php';

session_start();

$errorMessage = new ErrorHandler();
$isValid = new FormValidator();
$newProject = new ProjectController();

if (!isset($_POST['Submit'])) {
    echo $errorMessage->showError('Oops, something went wrong!');
    exit();
}

// Validate the form
if (!$isValid->validateForm()){
    echo $errorMessage->showError('Oops, something went wrong!');
    exit();
}

$newProject->addProject();