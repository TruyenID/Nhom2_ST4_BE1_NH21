<?php
session_start();
require "models/configregister.php";

if(!empty($_POST['submit'])){
    $username = '';
    $password = '';
    if(!empty($_POST["username"])){
            $username = $_POST["username"];
    }
    if(!empty($_POST["password"])){
            $password = $_POST["password"];
    }
    $password = md5($password);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND role_id='2'";
    $user = mysqli_query($conn,$sql);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND role_id='1'";
    $admin = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($admin) > 0){
        $_SESSION["user"] = $username;
        header("location:Admin/index.php");
    }
    else if(mysqli_num_rows($user) > 0){
        header("location:index.php");
    }
    else{
        header("location:login.php");
    }
}else{
    header("location:login.php");
}
