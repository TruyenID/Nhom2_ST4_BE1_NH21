<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $user->deleteUser($user_id);
}
header('location:user.php');