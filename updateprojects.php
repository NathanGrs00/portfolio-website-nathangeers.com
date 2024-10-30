<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';
session_start();

$projectID = $_POST['projectID'];
$title = $_POST['title'];
$description = $_POST['description'];
$skills = $_POST['checks']; // 'checks' contains selected skills from checkboxes

$imagePath = null;
$errorMessage = new ErrorHandler();
$error = ""; // Variable to store error messages

// Check if an image file was uploaded and if it's safe to move
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
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
        $error = $errorMessage->showError("Invalid file type or file too large.");
    } else if (!move_uploaded_file($fileTmpPath, $imagePath)) {
        $error = $errorMessage->showError("Error moving the uploaded file.");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/popups.css">
</head>
<body>
<div class="wrapper">
    <div class="featuredBlock">
        <div class="popUpDiv">
            <?php if ($error): ?>
                <!-- Display error message if there's an issue -->
                <div class="errorMessage"><?php echo $error; ?></div>
            <?php else: ?>
                <?php
                // Proceed only if no errors
                foreach ($_SESSION['projects'] as $project) {
                    if ($project->getId() == $projectID) {  // Find project by stored ID.
                        // Update the project fields.
                        $project->setTitle($title);
                        $project->setDescription($description);
                        $project->setSkills($skills);

                        if ($imagePath) {
                            $project->setImage($imagePath);  // Update the image if provided.
                        }

                        echo $errorMessage->showError("Project updated successfully!");
                        break;
                    }
                }
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
