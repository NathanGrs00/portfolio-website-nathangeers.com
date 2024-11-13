<?php
session_start();
unset($_SESSION['correctPassword']);
header('location: projects.php');