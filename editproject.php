<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';
session_start();

$id = $_GET['id'];
$selectedProject = null;
$errorMessage = new ErrorHandler();

// Find the project in the session array
foreach ($_SESSION['projects'] as $project){
    if ($project->getId() == $id){
        $selectedProject = $project;
        break;
    }
}

if (!$selectedProject){
    // Handle project not found
    echo $errorMessage->showError("Project not found.");
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/newproject.css"
</head>
<body>
    <div class="wrapper" id="wrapper">
        <h2>Edit a project</h2>
        <form method="post" action="updateprojects.php" enctype="multipart/form-data">
            <input type="hidden" name="projectID" value="<?php echo $project->getId(); ?>" />
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo $project->getTitle(); ?>" required />

            <label for="description">Description:</label>
            <textarea name="description" id="description" required><?php echo $project->getDescription(); ?></textarea>
            <?php
            // Array of all possible skills
            $allSkills = ['HTML', 'PHP', 'CSS', 'JavaScript', 'Python', 'Java', 'SQL', 'C#', 'GDScript', 'Shell'];

            // Retrieve skills used by this project as an array
            $usedSkills = $project->getSkills();
            ?>
            <div id="skillsBox">
                <p>Skills: </p>
                <div id="editSkills">
                    <?php foreach ($allSkills as $skill): ?>
                        <input type="checkbox" id="<?php echo $skill; ?>" name="checks[]" value="<?php echo $skill; ?>" <?php if (in_array($skill, $usedSkills)) echo 'checked'; ?>>
                        <label for="<?php echo $skill; ?>"><?php echo $skill; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <div id="buttonDiv">
                <button type="submit">Update Project</button>
            </div>
        </form>
        <form method="post" action="deleteproject.php">
            <input type="hidden" name="projectID" value="<?php echo $project->getId(); ?>" />
            <button type="submit" onclick="return confirm('Are you sure you want to delete this project?');">Delete Project</button>
        </form>
    </div>
</body>
</html>
