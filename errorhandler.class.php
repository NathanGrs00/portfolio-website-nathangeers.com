<?php
session_start();
class ErrorHandler {
    // Function that takes a message as a parameter.
    public function showError($message) {
        // Stores the message in a session variable for further use.
        $_SESSION['errormessage'] = $message;
        header('Location: displaymessage.php');
        exit();
    }
    public function getMessage(){
        // Storing the session variable in a normal variable, so that the session variable can be cleared.
        $message = $_SESSION['errormessage'];
        // Clear the message from session after retrieving it
        unset($_SESSION['errormessage']);
        return $message;
    }
}