<?php
require_once 'errorhandler.class.php';
class ImageController{
    private $uploadedFile;
    private $uploadDir = 'img/uploads/';
    private $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    public function __construct(){
        // Setting a variable to the image array.
        $this->uploadedFile = $_FILES['image'];
    }
    public function ImageUploader(){
        $errorMessage = new ErrorHandler();

        // Setting the path to null to avoid errors.
        $imagePath = null;
        // Checks if the uploaded file is set and if there are no errors when uploaded.
        if (isset($this->uploadedFile) && $this->uploadedFile['error'] === UPLOAD_ERR_OK){
            // Setting the filename to the name of the image. Using basename to avoid errors.
            $fileName = basename($this->uploadedFile['name']);

            // Defining the path where the file will be saved.
            $imagePath = $this->uploadDir . $fileName;

            // Check if the file type is not an image by comparing it to the $allowedTypes array. and the file size is not valid. 5MB limit.
            if (!in_array($this->uploadedFile['type'], $this->allowedTypes) || $this->uploadedFile['size'] >= 5000000) {
                $errorMessage->showError("Invalid file type or file too large.");
                exit();
            }
            // If the move function doesn't work for some reason, throw an error.
            elseif (!move_uploaded_file($this->uploadedFile['tmp_name'], $imagePath)) {
                $errorMessage->showError("Error moving the uploaded file.");
                exit();
            }
        }else{
            // Handle the case where no file was uploaded or there was an error
            $errorMessage->showError("Error uploading image.");
            exit();
        }
        // Return the directory.
        return $imagePath;
    }
}