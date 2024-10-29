<?php
require_once 'checkpassword.class.php';
require_once 'errorhandler.class.php';
class EmptyChecker{
       public function checkEmpty(){
        // Checks if password is not empty.
        if(!empty($_POST['password'])){
            // Calls construct function of PasswordChecker, giving user's input as the parameter.
            $passwordChecker = new PasswordChecker($_POST['password'], $_POST['action']);
            return $passwordChecker->checkCorrect();
        }else{
            $errorMessage = new ErrorHandler();
            return $errorMessage->showError("Please enter a password.");
        }
    }
}
