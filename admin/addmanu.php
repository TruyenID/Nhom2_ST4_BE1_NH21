<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";

$manu = new Manufacture;

if(isset($_POST['submit'])){
    $name = $_POST['manu_name'];
    $manu ->addManu($name);
}
header('location:manufactures.php');
