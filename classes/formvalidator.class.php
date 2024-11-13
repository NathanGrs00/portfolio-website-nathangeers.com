<?php
require_once 'errorhandler.class.php';
class FormValidator{
    function validateForm(){
        $errorMessage = new ErrorHandler();

        // Throws an error if any of the inputs are empty.
        if (empty($_POST["title"]) || empty($_POST["description"]) || empty($_POST["checks"])){
            $errorMessage->showError("All fields are required");
            return False;
        }
        // Returns true if form is not empty.
        return True;
    }
}