<?php
class PasswordChecker{
    private $password;
    // Sets password variable.
    public function __construct($password){
        $this->password = $password;
    }
    // Checks if password is correct.
    public function checkCorrect(){
        //Storing the user's correct password in a hashed variable. (IRL this is stored in a DB when registering)
        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

        //Checks if user's input == the hashed password.
        if(password_verify($this->password,$storedPasswordHash)){
            header('Location: addprojects.php');
            exit();
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Wrong password.");
        }
    }
}