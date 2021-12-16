<?php
session_start();
require "models/configregister.php";

if(!empty($_POST['submit'])){
    if(!empty($_POST["username"])){
        $username = $_POST["username"];
    }
    $password = $_POST["password"];
    $role_id = 2;

    $sql = "SELECT * FROM user WHERE username='$username'";

    $old = mysqli_query($conn,$sql);

    $password = md5($password);

    if(mysqli_num_rows($old) > 0){
        header("location:register.php");
    }
    $sql = "INSERT into user (username,password,role_id) VALUES ('$username','$password','$role_id')";
    mysqli_query($conn,$sql);
    echo "Sign up successfully"; 
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