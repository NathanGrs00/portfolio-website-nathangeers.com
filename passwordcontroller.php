<?php
require_once 'errorhandler.class.php';
class PasswordController{
    private $password;
    private $action;

    public function __construct($password, $action){
        $this->password = $password;
        $this->action = $action;
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

        if (password_verify($this->password, $storedPasswordHash)) {
            if ($this->action == 'add') {
                header('Location: public/html/addprojects.html');
                exit();
            } elseif ($this->action == 'edit') {
                // Handle editing a specific project.
                $projectId = $_POST['projectID']; // Get the project ID if editing
                header("Location: editproject.php?id=$projectId");
                exit();
            }
        }else{
            $errorMessage = new ErrorHandler();
            $errorMessage->showError("Wrong password.");
        }
    }
}

$initiate = new PasswordController($_POST['password'], $_POST['action']);
