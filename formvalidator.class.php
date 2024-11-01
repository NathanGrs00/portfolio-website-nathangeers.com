<?php
require_once 'errorhandler.class.php';
class FormValidator{
    function validateForm(){
        $errorMessage = new ErrorHandler();

        if (empty($_POST["title"]) || empty($_POST["description"]) || empty($_POST["checks"])){
            echo $errorMessage->showError("All fields are required");
            return False;
        }
        return True;
    }
}