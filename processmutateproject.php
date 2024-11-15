<?php
require_once 'classes/updateprojects.class.php';
require_once 'classes/deleteproject.class.php';

if($_POST['functionChoice'] == 'edit'){
    $pu = new ProjectUpdater($_POST['projectID'], $_POST['title'], $_POST['description'], $_POST['checks']);
    $pu->checkImage();
    $pu->updateProject();
}
if($_POST['functionChoice'] == 'delete'){
    $pr = new ProjectRemover();
    $pr->deleteProject();
    header("Location: projects.php");
    exit();
}
