<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $desc = $_POST['des'];
    $price = $_POST['price'];
    $id = $_POST['hidden_id'];
    if(isset($_FILES)){
        $image = $_FILES['image']['name'];
    }else{
        $image = null;
    }   
    $target_dir ="../img/";
    $product ->editProducts($name,$manu_id,$type_id,$price,$image,$desc,$id);
    if($image != null){
        //upload   
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }
    
}
header('location:products.php');