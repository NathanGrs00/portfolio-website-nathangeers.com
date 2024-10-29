<?php
require_once 'project.class.php';
require_once 'formvalidator.class.php';
session_start();

if (isset($_POST['Submit'])) {
    $isValid = new formValidator();

    // Validate the form
    if ($isValid->validateForm("project")) {
        $id = count($_SESSION['projects']) + 1;

        // Handle file upload
        $destinationPath = null; // Initialize the variable

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imageTmpPath = $_FILES['image']['tmp_name'];
            $imageName = $_FILES['image']['name'];
            $destinationPath = 'img/uploads/' . basename($imageName); // Use basename for security

            // Move the uploaded file to the destination path
            if (!move_uploaded_file($imageTmpPath, $destinationPath)) {
                echo "Error moving the uploaded file.";
                exit();
            }
        } else {
            // Handle the case where no file was uploaded or there was an error
            echo "Error uploading image.";
            exit; // Stop the script
        }

        // Create a new Project instance with the image path
        $singleProject = new Project($id, $_POST["title"], $_POST["description"], $_POST["checks"], $destinationPath);
        $_SESSION['projects'][] = $singleProject;
    }
}

// Redirect to projects page
header('Location: projects.php');
exit; // It's good practice to exit after a header redirect
