<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product->deleteProducts($id);
}
header('location:products.php');