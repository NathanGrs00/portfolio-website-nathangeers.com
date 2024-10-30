<?php
require_once 'errorhandler.class.php';
class ImageController{
    public function ImageUploader(){
        $errorMessage = new ErrorHandler();

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $imageTmpPath = $_FILES['image']['tmp_name'];
            $imageName = $_FILES['image']['name'];
            $destinationPath = 'img/uploads/'.basename($imageName); // Use basename for security

            // Move the uploaded file to the destination path
            if (!move_uploaded_file($imageTmpPath, $destinationPath)){
                echo $errorMessage->showError("Error moving the uploaded file.");
                exit();
            }
        }else{
            // Handle the case where no file was uploaded or there was an error
            echo $errorMessage->showError("Error uploading image.");
            exit();
        }
        return $destinationPath;
    }
}