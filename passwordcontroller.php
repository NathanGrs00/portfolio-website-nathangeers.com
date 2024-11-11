<?php
require_once 'errorhandler.class.php';
class PasswordController{
    private $password;

    public function __construct($password){
        $this->password = $password;
        $this->checkEmpty();
    }
    public function checkEmpty(){
        if(!empty($this->password)){
            $this->checkPassword();
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Please enter a password.");
        }
    }
    public function checkPassword(){
        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

        if (password_verify($this->password, $storedPasswordHash)){
            $_SESSION['correctPassword'] = true;
            header('Location: projects.php');
            exit();
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Wrong password.");
        }
    }
}

$initiate = new PasswordController($_POST['password']);
