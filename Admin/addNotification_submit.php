<?php
require "config.php";
require "models/db.php";
require "models/Notification.php";
$notification = new Notification;

if(isset($_POST['submit'])){
    $value = $_POST['value'];
    $image = $_FILES['image']['name'];
    $notification ->addNotification($value,$image);
    //upload
    $target_dir ="../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
}
header('location:Notification.php');