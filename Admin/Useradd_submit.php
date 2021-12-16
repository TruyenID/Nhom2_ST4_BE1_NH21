<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $user ->addUser($username,$password,$role_id);
    header('location:user.php');
    //upload
}
else{
    header('location:user.php');
}
