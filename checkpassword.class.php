<?php
require_once 'updateprojects.php';
class PasswordChecker
{
    private $password;
    private $action;

    // Sets password variable.
    public function __construct($password, $action)
    {
        $this->password = $password;
        $this->action = $action;
    }

    // Checks if password is correct.
    public function checkCorrect(){
        //Storing the user's correct password in a hashed variable. (IRL this is stored in a DB when registering)
        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

        if (password_verify($this->password, $storedPasswordHash)) {
            if ($this->action === 'add') {
                header('Location: addprojects.php');
                exit();
            } elseif ($this->action === 'edit') {
                // Handle editing a specific project.
                $projectId = $_POST['projectId'] ?? ''; // Get the project ID if editing
                header("Location: editproject.php?id={$projectId}");
                exit();
            }
        } else {
            $errorMessage = new ErrorHandler();
            return $errorMessage->showError("Wrong password.");
        }
    }
}