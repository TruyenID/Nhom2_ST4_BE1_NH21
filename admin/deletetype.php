<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$type = new Protype;

if(isset($_GET['type_id'])){
    $id = $_GET['type_id'];
    $type->deleteType($id);
}
header('location:protypes.php');