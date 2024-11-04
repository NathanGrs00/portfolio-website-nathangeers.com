<?php
require_once 'projectcontroller.class.php';
require_once 'project.class.php';
require_once 'displayrecentproject.class.php';

if (!isset($_SESSION['projects'])){
    $newList = new ProjectController();
    $newList->newProjectList();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nathan Geers | Portfolio Website</title>
    <link rel="stylesheet" href="public/css/homepage.css">
</head>
<body>
    <nav>
        <h2 onclick="location.href='index.php'" class="nameLogo">Nathan<span>Geers</span></h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Experience</a></li>
            <li><a href="#">CV</a></li>
            <li><a href="projects.php">Projects</a></li>
        </ul>
        <button id="navButton" onclick="location.href='public/html/contactpage.html'">Contact</button>
    </nav>
    <div class="sectionWelcome">
        <div class="welcomeDivLeft">
            <h2 id="entryText">Hi, <br> My name is <span>Nathan</span>.<br>Welcome to my website!</h2>
            <button class="contentButton" onclick="location.href='public/html/contactpage.html'">Get in contact</button>
        </div>
        <div class="welcomeDivRight">
            <img alt="Photo of Nathan Geers" src="img/6606-male-user.png"/>
        </div>
    </div>
    <div class="sectionBio">
        <div class="bioDivLeft">
            <div class="bioHoverCubes">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <path fill="#f5cb5c" d="M52.203 9.61c-5.3 1.18-10.543 2.816-15.457 5.292c.113 4.34.395 8.496.961 12.72c-1.906 1.222-3.914 2.273-5.695 3.702c-1.813 1.395-3.66 2.727-5.301 4.36a102 102 0 0 0-10.316-6.004C12.543 33.824 8.94 38.297 6 43.305c2.313 3.629 4.793 7.273 7.086 10.117v30.723q.087 0 .168.007L32.09 85.97a2.03 2.03 0 0 1 1.828 1.875l.582 8.316l16.426 1.172l1.133-7.672a2.03 2.03 0 0 1 2.007-1.734h19.868a2.03 2.03 0 0 1 2.007 1.734l1.133 7.672l16.43-1.172l.578-8.316a2.03 2.03 0 0 1 1.828-1.875l18.828-1.817q.082-.007.168-.007V81.69h.008V53.42c2.652-3.335 5.16-7.019 7.086-10.116c-2.941-5.008-6.543-9.48-10.395-13.625a102 102 0 0 0-10.316 6.004c-1.64-1.633-3.488-2.965-5.3-4.36c-1.782-1.43-3.79-2.48-5.696-3.703c.566-4.223.848-8.379.96-12.719c-4.913-2.476-10.155-4.113-15.456-5.293c-2.117 3.559-4.055 7.41-5.738 11.176c-2-.332-4.008-.457-6.02-.48V20.3l-.039.004c-.016.002-.023-.004-.04-.004v.004c-2.01.023-4.019.148-6.019.48c-1.683-3.765-3.62-7.617-5.738-11.176zM37.301 54.55c6.27 0 11.351 5.079 11.351 11.345c0 6.27-5.082 11.351-11.351 11.351c-6.266 0-11.348-5.082-11.348-11.351c0-6.266 5.082-11.344 11.348-11.344zm53.398 0c6.266 0 11.348 5.079 11.348 11.345c0 6.27-5.082 11.351-11.348 11.351c-6.27 0-11.351-5.082-11.351-11.351c0-6.266 5.082-11.344 11.351-11.344zM64 61.189c2.016 0 3.656 1.488 3.656 3.32v10.449c0 1.832-1.64 3.32-3.656 3.32c-2.02 0-3.652-1.488-3.652-3.32v-10.45c0-1.831 1.632-3.32 3.652-3.32zm0 0"/>
                        <path fill="#f5cb5c" d="m98.008 89.84l-.582 8.36a2.024 2.024 0 0 1-1.88 1.878l-20.062 1.434c-.046.004-.097.004-.144.004c-.996 0-1.86-.73-2.004-1.73l-1.152-7.806H55.816l-1.152 7.805a2.026 2.026 0 0 1-2.148 1.727l-20.063-1.434a2.024 2.024 0 0 1-1.879-1.879l-.582-8.36l-16.937-1.632c.008 1.82.03 3.816.03 4.211c0 17.887 22.692 26.484 50.88 26.582h.07c28.188-.098 50.871-8.695 50.871-26.582c0-.402.024-2.39.031-4.211zM45.922 66.566a7.53 7.53 0 0 1-7.535 7.532a7.534 7.534 0 0 1-7.535-7.532a7.534 7.534 0 0 1 7.535-7.53a7.53 7.53 0 0 1 7.535 7.53m36.156 0a7.53 7.53 0 0 0 7.531 7.532a7.531 7.531 0 1 0 0-15.063a7.53 7.53 0 0 0-7.53 7.531"/>
                    </svg>
                    <div class="hiddenText">
                        <p>I first got in touch with coding, when I was interested in making videogames. I had to use a python-like language called GDscript when using GODOT.</p>
                    </div>
                </div>
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#f5cb5c" d="M11.914 0C5.82 0 6.2 2.656 6.2 2.656l.007 2.752h5.814v.826H3.9S0 5.789 0 11.969s3.403 5.96 3.403 5.96h2.03v-2.867s-.109-3.42 3.35-3.42h5.766s3.24.052 3.24-3.148V3.202S18.28 0 11.913 0M8.708 1.85c.578 0 1.046.47 1.046 1.052c0 .581-.468 1.051-1.046 1.051s-1.046-.47-1.046-1.051c0-.582.467-1.052 1.046-1.052"/>
                        <path fill="#f5cb5c" d="M12.087 24c6.092 0 5.712-2.656 5.712-2.656l-.007-2.752h-5.814v-.826h8.123s3.9.445 3.9-5.735s-3.404-5.96-3.404-5.96h-2.03v2.867s.109 3.42-3.35 3.42H9.452s-3.24-.052-3.24 3.148v5.292S5.72 24 12.087 24m3.206-1.85c-.579 0-1.046-.47-1.046-1.052c0-.581.467-1.051 1.046-1.051c.578 0 1.046.47 1.046 1.051c0 .582-.468 1.052-1.046 1.052"/>
                    </svg>
                    <div class="hiddenText">
                        <p>This sparked my interest in coding, so I learned the basics of Python through making small projects and eventually enrolled in a computer science study.</p>
                    </div>
                </div>
            </div>
            <div class="bioHoverCubes">
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#f5cb5c" d="M5.08 0h1.082v1.069h.99V0h1.082v3.236H7.152V2.153h-.99v1.083H5.081zm4.576 1.073h-.952V0h2.987v1.073h-.953v2.163H9.656zM12.165 0h1.128l.694 1.137L14.68 0h1.128v3.236h-1.077V1.632l-.744 1.151h-.019l-.745-1.15v1.603h-1.058zm4.181 0h1.083v2.167h1.52v1.07h-2.603z"/>
                        <path fill="#f5cb5c" d="M5.046 22.072L3 4.717h18L18.953 22.07L11.99 24zm4.137-9.5l-.194-2.18h8.145l.19-2.128H6.664l.574 6.437h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.332l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571z"/>
                    </svg>
                    <div class="hiddenText">
                        <p>In my first semester during my study on the Associates degree Academie in Roosendaal, I've worked on building websites using HTML, CSS, PHP and a little Javascript.</p>
                    </div>
                </div>
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#f5cb5c" d="m15.638 4.566l.056.032c-.758.4-2.924 1.69-2.924 3.332c0 .554.317 1.088.614 1.59c.262.442.509.858.509 1.238c0 .957-.933 1.7-1.46 2.042l-.1-.058c.199-.243.444-.65.444-1.084c0-.598-.307-1.076-.618-1.561c-.322-.501-.648-1.01-.648-1.67c0-2.292 3.115-3.522 4.127-3.861m-4.095 1.212c1.253-1.12 2.622-2.344 2.622-4.185c0-.833-.341-1.365-.51-1.578L13.6.046c.04.166.1.472.1.872c0 1.676-1.422 2.85-2.798 3.988C9.611 5.974 8.36 7.008 8.36 8.392c0 1.985 1.958 3.206 2.785 3.722l.063.04l.05-.03q-.067-.074-.142-.152c-.636-.677-1.602-1.704-1.602-3.275c0-1.103.974-1.974 2.03-2.919m-.452 9.908c1.764 0 2.998-.253 3.546-.408l.832.48c-.793.403-2.551.71-4.382.71c-2.153 0-4.507-.462-4.514-1.078c-.005-.34.765-.566 1.595-.712l.05.029s-.281.101-.278.333c.004.35 1.42.646 3.15.646m-3.529 2.171c0-.407.839-.6 1.223-.677l.05.03c-.066.049-.102.116-.102.173c0 .267.93.511 2.356.511c1.278 0 1.988-.157 2.41-.258l.99.573c-.045.032-1.02.645-3.402.645c-1.731 0-3.525-.432-3.525-.997m8.529-1.728c1.18-.673 2.361-1.469 2.428-2.747c.044-.839-.727-1.454-1.57-1.29l.045-.112v-.002c.212-.064.474-.116.767-.116c.943 0 1.666.565 1.758 1.356c.186 1.586-2.062 2.618-3.321 2.973zm1.975 2.988c.01 1.09-3.698 1.738-7.012 1.767c-2.861.025-7.474-.515-7.484-1.605c-.006-.753 2-1.274 3.09-1.424l.115.065s-1.625.377-1.62 1.062c.006.683 3.425 1.274 5.894 1.253c3.825-.034 6.414-.657 6.72-1.502l.054-.031c.112.082.24.217.243.415M6.43 21.337a26 26 0 0 0 4.279.325c6.208-.054 7.96-1.58 8.23-1.912l.047.028c-.064 1.208-3.347 2.212-7.396 2.247c-2.061.018-3.937-.22-5.285-.615zm2.602-9.283c-1.079.083-3.396.426-3.396 1.036c0 .462 2.124 1.113 5.452 1.113c2.994 0 4.884-.565 5.325-.78l-.643-.375c-.46.125-2.169.506-4.682.506c-1.48 0-4.03-.273-4.03-.69c0-.374 1.591-.662 2.048-.745l.029-.005z"/>
                    </svg>
                    <div class="hiddenText">
                        <p>Coming soon...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bioDivRight">
            <div class="divRightText">
                <h3>A student software developer with an eagerness to learn new things.</h3>
                <p>
                    As I grew up, I believe I changed a lot. <br>
                    However, one thing remained a constant throughout the last years:<br>
                    Spending a lot of time behind a computer. <br>
                    Whether it was through gaming, game development, editing or making videos or my recent curiosity and career choice towards software development.<br>
                    On this website, I am excited to show you the projects that I've worked on. If you have any questions, be sure to contact me without hesitation!
                </p>
                <h4>"I would take curiosity over knowledge anytime." - Nathan Geers</h4>
            </div>
        </div>
    </div>
    <?php
    // Call the function to display the most recent project
    $recentProject = new ShowRecentProject();
    $recentProject->displayRecentProject();
    ?>
</body>
</html>