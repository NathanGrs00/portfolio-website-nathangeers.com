<?php
session_start();
class ErrorHandler {
    public function showError($message) {
        $_SESSION['errormessage'] = $message;
        header('Location: displaymessage.php');
        exit();
    }
    public function getMessage(){
        // Check if 'errormessage' is set in the session; if not, return an empty string
        $message = $_SESSION['errormessage'];
        unset($_SESSION['errormessage']); // Clear the message from session after retrieving it
        return $message;
    }
}