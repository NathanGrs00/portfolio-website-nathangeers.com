<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="popups.css">
</head>
<body>
    <div class="wrapper">
        <div class="featuredBlock">
            <div class="popUpDiv">
                <?php
                session_start();

                class PasswordChecker{
                    private $password;
                    // Sets password variable.
                    public function __construct($password){
                        $this->password = $password;
                    }
                    // Checks if password is correct.
                    public function checkCorrect(){
                        //Storing the user's correct password in a hashed variable. (IRL this is stored in a DB when registering)
                        $storedPasswordHash = password_hash('test123', PASSWORD_DEFAULT);

                        //Checks if user's input == the hashed password.
                        if(password_verify($this->password,$storedPasswordHash)){
                            header('Location: addprojects.php');
                            exit();
                        }else{
                            echo "Wrong password.";
                            echo "<button onclick=location.href='projects.html'>Go Back</button>";
                        }
                    }
                }
                // Checks if password is not empty.
                if(!empty($_POST['password'])){
                    // Calls construct function of PasswordChecker, giving user's input as the parameter.
                    $passwordChecker = new PasswordChecker($_POST['password']);
                    $passwordChecker->checkCorrect();
                } else {
                    echo "Please enter a password.";
                    echo "<button onclick=location.href='projects.html'>Go Back</button>";
                }

                ?>
            </div>
        </div>
    </div>
</body>
</html>
