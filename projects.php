<?php
require_once 'projectcontroller.class.php';

$listProjects = new ProjectController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>My Projects | Nathan Geers</title>
    <link rel="stylesheet" href="public/css/projectsheet.css">
</head>
<body id="body">
    <nav>
        <h2 onclick="location.href='index.php'" class="nameLogo" id="hiddenLogo">N<span>G</span></h2>
        <h2 onclick="location.href='index.php'" class="nameLogo" id="shownLogo">Nathan<span>Geers</span></h2>
        <ul>
            <li id="homeElement"><a href="index.php">Home</a></li>
            <li><a href="#">Experience</a></li>
            <li><a href="#">CV</a></li>
            <li><a href="projects.php">Projects</a></li>
        </ul>
        <button id="navButton" onclick="location.href='public/html/contactpage.html'">Contact</button>
    </nav>
    <div class="wrapper">
        <div class="projectsMain">
            <h1>My Projects:</h1>
            <hr class="projectBreak">
            <?php
            $listProjects->showAllProjects();
            ?>
            <div class="addProjects">
                <h2 onclick="location.href='index.php'" class="nameLogo">Nathan <span>Geers</span></h2>
                <button class="contentButton" onclick="location.href='public/html/passwordform.html'">Add Projects</button>
            </div>
        </div>
    </div>
</body>
</html>