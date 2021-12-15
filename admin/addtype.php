<?php
require "config.php";
require "models/db.php";
require "models/protype.php";

$type = new Protype;

if(isset($_POST['submit'])){
    $name = $_POST['type_name'];
    $type ->addType($name);
}
header('location:protypes.php');
