<?php
require "config.php";
require "models/db.php";
require "models/notification.php";
$notification = new Notification;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $notification->deleteNotification($id);
}
header('location:notification.php');