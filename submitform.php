<?php
require_once 'errorhandler.class.php';
require_once 'formvalidator.class.php';
$popup = new ErrorHandler();
$isValid = new FormValidator();

// Check if form fields are empty
if (!$isValid->validateForm("contact")){
    echo $popup->showError("Please fill in all the required fields.");
}

// Success message content
$name = htmlspecialchars($_POST['initials']) .". ". htmlspecialchars($_POST['lastName']);
$content = "Thank you, $name! Your message has been received. I will get back to you shortly.";

echo $popup->showError($content);
