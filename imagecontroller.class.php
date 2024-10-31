<?php
require_once 'errorhandler.class.php';
class ImageController{
    public function ImageUploader(){
        $errorMessage = new ErrorHandler();
        $imagePath = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $uploadedFile = $_FILES['image'];
            $fileName = basename($uploadedFile['name']);
            $fileTmpPath = $uploadedFile['tmp_name'];
            $fileType = $uploadedFile['type'];
            $fileSize = $uploadedFile['size'];

            // Define the path where the file will be saved
            $uploadDir = 'img/uploads/';
            $imagePath = $uploadDir . $fileName;

            // Check if the file type is an image and the file size is valid
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($fileType, $allowedTypes) || $fileSize >= 5000000) { // 5MB limit
                echo $errorMessage->showError("Invalid file type or file too large.");
                exit();
            } elseif (!move_uploaded_file($fileTmpPath, $imagePath)) {
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