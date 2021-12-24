<?php 
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    require "models/billing.php";
    include "libCart.php";
    $billing = new Billing;
    if(isset($_GET['id_bill'])){
        $idBill = $_GET['id_bill'];
        $billing->deleteBilling($idBill);
    }
    header('location:billings.php');
?>