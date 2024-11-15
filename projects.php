<?php
require_once 'controllers/projectcontroller.class.php';
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
    <script src="public/javascript/passcorrect.js"></script>
</head>
<body id="body">
    <nav>
        <h2 onclick="location.href='index.php'" class="nameLogo, hiddenLogo">N<span>G</span></h2>
        <h2 onclick="location.href='index.php'" class="nameLogo, shownLogo">Nathan<span>Geers</span></h2>
        <ul>
            <li id="homeElement"><a href="index.php">Home</a></li>
            <li><a href="public/html/cv.html">CV</a></li>
            <li><a href="projects.php">Projects</a></li>
        </ul>
        <button id="navButton" onclick="location.href='public/html/contactpage.html'">Contact</button>
    </nav>
    <div class="wrapper">
        <div class="projectsMain">
            <h1>My Projects:</h1>
            <hr class="projectBreak">
            <?php
            // Calls function to show all projects.
            $listProjects->showAllProjects();
            ?>
            <div class="addProjects">
                <h2 onclick="location.href='index.php'" class="nameLogo, shownLogo" >Nathan<span>Geers</span></h2>
                <h2 onclick="location.href='index.php'" class="nameLogo, hiddenLogo">N<span>G</span></h2>
                <button class="hiddenButton contentButton" id="hiddenAdd" onclick="location.href='addprojects.php'">Add Projects</button>
                <button class="hiddenButton contentButton" id="hiddenLogOut" onclick="location.href='logout.php'">Log Out</button>
                <button class="contentButton" id="shownButton" onclick="location.href='public/html/passwordform.html'">Login</button>
            </div>
        </div>
    </div>
    <script>
        /* Checking if correctPassword is set and calling javascript function if so. */
        <?php if (isset($_SESSION['correctPassword'])): ?>
        toggleVisible();
        <?php endif; ?>
    </script>
</body>
</html>
