<?php
require_once 'errorhandler.class.php';
class FormValidator{
    function validateForm($formType){
        $errorMessage = new ErrorHandler();
        if ($formType == "project"){
            if (empty($_POST["title"]) || empty($_POST["description"]) || empty($_POST["checks"])){
                $errorMessage->showError("All fields are required");
                return False;
            }
        }
        elseif ($formType == "contact"){
            if (empty($_POST["initials"]) || empty($_POST["lastName"]) || empty($_POST["phoneNumber"]) || empty($_POST["email"])){
                $errorMessage->showError("All fields are required");
                return False;
            }
        }
        return True;
    }
}