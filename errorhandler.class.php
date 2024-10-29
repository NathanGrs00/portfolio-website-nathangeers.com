<?php
class ErrorHandler {
    public function showError($message) {
        return $message . "<button onclick=location.href='projects.php'>Go Back</button>";
    }
}