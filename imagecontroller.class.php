<?php
require_once 'errorhandler.class.php';
class ImageController{
    private $uploadedFile;
    private $uploadDir = 'img/uploads/';
    private $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    public function __construct(){
        $this->uploadedFile = $_FILES['image'];
    }
    public function ImageUploader(){
        $errorMessage = new ErrorHandler();

        $imagePath = null;
        if (isset($this->uploadedFile) && $this->uploadedFile['error'] === UPLOAD_ERR_OK){
            $fileName = basename($this->uploadedFile['name']);

            // Define the path where the file will be saved
            $imagePath = $this->uploadDir . $fileName;

            // Check if the file type is an image and the file size is valid
            if (!in_array($this->uploadedFile['type'], $this->allowedTypes) || $this->uploadedFile['size'] >= 5000000) { // 5MB limit
                echo $errorMessage->showError("Invalid file type or file too large.");
                exit();
            } elseif (!move_uploaded_file($this->uploadedFile['tmp_name'], $imagePath)) {
                echo $errorMessage->showError("Error moving the uploaded file.");
                exit();
            }
        }else{
            // Handle the case where no file was uploaded or there was an error
            echo $errorMessage->showError("Error uploading image.");
            exit();
        }
        return $imagePath;
    }
}