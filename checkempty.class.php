<?php
class EmptyChecker{
    public function checkEmpty(){
        require_once 'checkpassword.class.php';
        require_once 'errorhandler.class.php';
        // Checks if password is not empty.
        if(!empty($_POST['password'])){
            // Calls construct function of PasswordChecker, giving user's input as the parameter.
            $passwordChecker = new PasswordChecker($_POST['password']);
            $passwordChecker->checkCorrect();
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Please enter a password.");
        }
    }
}