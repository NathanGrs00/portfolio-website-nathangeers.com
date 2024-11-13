<?php
$allSkills = ['HTML', 'PHP', 'CSS', 'JavaScript', 'Python', 'Java', 'SQL', 'C#', 'GDScript', 'Shell'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Add a project | Nathan Geers</title>
    <link rel="stylesheet" href="public/css/mutateproject.css">
</head>
<body>
    <div class="wrapper">
        <div id="mainBlock">
            <h2>Add a project</h2>
            <form action="submitproject.php" method="POST" enctype="multipart/form-data">
                <label for="title">Title: </label><input type="text" id="title" name="title" required>
                <label for="description">Description: </label><textarea id="description" name="description" maxlength="200" required></textarea>
                <div id="skillsBox">
                    <p>Skills: </p>
                    <div id="editSkills">
                        <?php // Goes through each skill and checks the checkbox if it's in the usedSkills array.
                        foreach ($allSkills as $skill){ ?>
                            <input type="checkbox" id="<?php echo $skill; ?>" name="checks[]" value="<?php echo $skill; ?>">
                            <label for="<?php echo $skill; ?>"><?php echo $skill; ?></label>
                        <?php }; ?>
                    </div>
                </div>
                <div class="fileUpload">
                    <label for="image">
                        <input type="file" id="image" name="image" accept="image/*">Upload Image
                    </label>
                </div>
                <div id="buttonDiv">
                    <button type="submit" name="Submit">Add Project</button>
                    <a id="goBackButton" onclick="location.href='projects.php'">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>