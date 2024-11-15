<?php
require_once 'classes/errorhandler.class.php';
class PasswordController{
    private $password;

    public function __construct($password){
        //Storing the parameter in a private variable.
        $this->password = $password;
    }
    public function checkEmpty(){
        //Checking if password is empty. If it is, throw an error.
        if(!empty($this->password)){
            return True;
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Please enter a password.");
            exit();
        }
    }
    public function checkPassword(){
        //Hashing the password, this usually gets stored in a database.
        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

        //Checking if user input is the same as the stored password.
        if (password_verify($this->password, $storedPasswordHash)){
            //If so, set a session variable to true. This gets used for displaying the edit and add buttons.
            $_SESSION['correctPassword'] = true;
            return True;
        }else{
            // If not, throw an error.
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Wrong password.");
            exit();
        }
    }
}

