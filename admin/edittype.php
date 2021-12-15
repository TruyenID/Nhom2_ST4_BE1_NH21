<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$type = new Protype;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $id = $_POST['hidden_id'];
    $type ->editType($name,$id);
    
}
header('location:protypes.php');