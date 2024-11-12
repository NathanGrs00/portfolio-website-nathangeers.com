<?php
require_once 'errorhandler.class.php';
class PasswordController{
    private $password;

    public function __construct($password){
        //Storing the parameter in a private variable.
        $this->password = $password;
        $this->checkEmpty();
    }
    public function checkEmpty(){
        //Checking if password is empty. If it is, throw an error.
        if(!empty($this->password)){
            $this->checkPassword();
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Please enter a password.");
        }
    }
    public function checkPassword(){
        //Hashing the password, this usually gets stored in a database.
        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

        //Checking if user input is the same as the stored password.
        if (password_verify($this->password, $storedPasswordHash)){
            //If so, set a session variable to true. This gets used for displaying the edit and add buttons.
            $_SESSION['correctPassword'] = true;
            header('Location: projects.php');
            exit();
        }else{
            // If not, throw an error.
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Wrong password.");
        }
    }
}
//Initiates the class, because this page gets visited through
$initiate = new PasswordController($_POST['password']);
