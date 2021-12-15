<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manu = new Manufacture;

if(isset($_GET['manu_id'])){
    $id = $_GET['manu_id'];
    $manu->deleteManu($id);
}
header('location:manufactures.php');