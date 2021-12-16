<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $user_id = $_POST['hidden_id'];
    $password = md5($password);
    $user ->editUser($username,$password,$role_id,$user_id);
}
header('location:user.php');