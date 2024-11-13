<?php require_once 'classes/errorhandler.class.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nathan Geers | Portfolio Website</title>
    <link rel="stylesheet" href="public/css/popups.css"
</head>
<body>
<div class="wrapper">
    <div class="mainBlock">
        <?php $errorMessage = new ErrorHandler();
        echo $errorMessage->getMessage(); ?>
        <button onclick=location.href='projects.php'>Go Back</button>
    </div>
</div>
</body>
</html>