<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    Nhập UserName :<input type="text" name="username" required><br>
    Nhập PassWord :<input type="password" name="password" require><br>
    <button type="submit" name="submit">Login</button>
    <a href="register.php">Register</a>
</form>
    <?php
        if(isset($_POST['submit'])){
            include "user.php";
            $user = new User($_POST['username'],$_POST['password'],NULL,NULL);
            if($user->login($_POST['username'],$_POST['password'])){
                header('location:index.php');
                $_SESSION['user'] = $_POST['username'];
                $_SESSION['pass'] = $_POST['password'];
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                }
            }else
            {
                echo "Password hoặc User không đúng";
            }
        }
    ?>
</body>
</html>