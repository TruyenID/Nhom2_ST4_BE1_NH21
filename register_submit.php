<?php
session_start();
require "models/configregister.php";

if(!empty($_POST['submit'])){
    if(!empty($_POST["username"])){
        $username = $_POST["username"];
    }
    $password = $_POST["password"];
    $role_id = 2;
    $password = md5($password);
    
    $sql = "SELECT * FROM user WHERE username='$username'";
    $old = mysqli_query($conn,$sql);
    $sql = "INSERT into user (username,password,role_id) VALUES ('$username','$password','$role_id')";
    if(mysqli_num_rows($old) > 0){
        $message1 = "Tài Khoản Tồn Tại. Vui Lòng Tạo Lại !";
        echo "<script type='text/javascript'>alert('$message1');</script>";
        ?>
        <a class="nav-link"  href="register.php" role="button">
        Register</a>
        <?php 
    }else{      
        mysqli_query($conn,$sql);
        $message = "Sign up successfully! Quay Lại Để Đăng Nhập";
        echo "<script type='text/javascript'>alert('$message');</script>";
        ?>
        <a class="nav-link"  href="login.php" role="button">
        Login</a>
        <?php

    }  
    // if($password != $repassword){
    //     header("location:register.php");
    // }
    // if($password != $repassword && $conn->query($sql) === FALSE){
    //     echo "LỖi";
    // }
    // if ($password == $repassword && $conn->query($sql) === TRUE){
    //     echo "Sign up successfully"; 
    // }
}else{
    header("location:register.php");
}
?>