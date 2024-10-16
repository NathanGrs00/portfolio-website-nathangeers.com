<?php
class ErrorHandler {
    public function showError($message) {
        echo $message . "<button onclick=location.href='./public/html/projects.html'>Go Back</button>";
    }
}