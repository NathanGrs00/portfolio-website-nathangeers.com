<?php
require_once 'project.class.php';
require_once 'projecthandler.class.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>My Projects | Nathan Geers</title>
    <link rel="stylesheet" href="public/css/projectsheet.css">
    <script src="public/javascript/showcontent.js"></script>
</head>
<body id="body">
    <nav>
        <h2 onclick="location.href='index.php'" class="nameLogo">Nathan <span>Geers</span></h2>
        <ul>
            <li><a href="index.php">Home</a></li>
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
            $showProjects = new ProjectHandler();
            foreach ($_SESSION['projects'] as $project){
                $showProjects->projectShow($project->getId(), $project->getTitle(), $project->getDescription(), $project->getSkills(), $project->getImage());
            }
            ?>
            <div class="addProjects">
                <h2 onclick="location.href='index.php'" class="nameLogo">Nathan <span>Geers</span></h2>
                <button class="contentButton" onclick="showContent('popUpMenu', 'add')">Add Projects</button>
            </div>
        </div>
        <div class="popUpMenu" id="popUpMenu">
            <div class="popUpBox">
                <h2>Login to add projects:</h2>
                <form action="popups.php" method="POST">
                    <input type="hidden" name="action" id="actionInput" value="add">
                    <div class="popUpForm">
                        <label for="password">Password:</label>
                        <input id="password" type="password" placeholder="Enter your password here..." name="password">
                    </div>
                    <div class="popUpButton">
                        <button class="passwordButton" onclick="location.href='checkempty.class.php'">Log In</button>
                    </div>
                </form>
                <button class="passwordButton" onclick="location.href='projects.php'">Go Back</button>
            </div>
        </div>
    </div>
</body>
</html>