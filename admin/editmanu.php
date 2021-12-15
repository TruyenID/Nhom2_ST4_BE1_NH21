<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manu = new Manufacture;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $id = $_POST['hidden_id'];
    $manu ->editManu($name,$id);
    
}
header('location:manufactures.php');