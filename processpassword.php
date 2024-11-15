<?php
require_once 'controllers/passwordcontroller.class.php';

$pc = new PasswordController($_POST['password']);

if($pc->checkEmpty()){
    if($pc->checkPassword()){
        header('Location: projects.php');
    }
}
