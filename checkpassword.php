<?php
session_start();
$_SESSION['password'] = $_POST['password'];
$password = new passwordCheck();
$password->isEmptyPassword();

class password{

}
class passwordCheck{
    function isEmptyPassword(){
        if (empty($_SESSION['password'])) {
            echo "Please enter a password.";
            echo "<button onclick=location.href='projects.html'>Go Back</button>";
        }else{
            $this->checkPassword();
        }
    }
    function checkPassword(){
        if ($_SESSION['password'] == 'test123'){
            echo "test";
            header('Location: editprojects.php');
        }else{
            echo "Wrong password.";
            echo "<button onclick=location.href='projects.html'>Go Back</button>";
        }
    }
}