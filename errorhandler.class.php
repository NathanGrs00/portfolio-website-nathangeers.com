<?php
class ErrorHandler {
    public function showError($message) {
        echo $message . "<button onclick=location.href='projects.php'>Go Back</button>";
    }
}