<?php
require_once 'checkempty.class.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/popups.css">
</head>
<body>
    <div class="wrapper">
        <div class="featuredBlock">
            <div class="popUpDiv">
                <?php
                $isempty = new EmptyChecker();
                $isempty->checkEmpty();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
