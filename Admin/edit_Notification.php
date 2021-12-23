<?php
require "config.php";
require "models/db.php";
require "models/Notification.php";
$notification = new Notification;

if(isset($_POST['submit'])){
    $value = $_POST['value'];
    $image = $_FILES['image']['name'];
    $id = $_POST['hidden_id'];
    if(isset($_FILES)){
        $image = $_FILES['image']['name'];
    }else{
        $image = null;
    }   
    $target_dir ="../img/";
    $notification ->editNotification($value,$image,$id);
    if($image != null){
        //upload   
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }
}
header('location:Notification.php');