<?php
session_start();
require_once 'project.class.php';
require_once 'formvalidator.class.php';

if(!isset($_SESSION['projects'])){
    $_SESSION['projects'] = array();
}

if(isset($_POST['Submit'])){
    $isValid = new formValidator();
    if ($isValid->validateForm("project")){
        $singleProject = new Project($_POST["title"], $_POST["description"], $_POST["checks"]);
        $_SESSION['projects'][] = $singleProject;
    }
}
header('Location: projects.php');