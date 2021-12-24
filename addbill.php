<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/billing.php";
include "libCart.php";
$billing = new Billing;
        //lay thong tin don hang
        $fname =  $_POST['first-name'];
        $lname =  $_POST['last-name'];
        $email =  $_POST['email'];
        $city = $_POST['city'];
        $country =  $_POST['country'];
        $tel =  $_POST['tel'];
        //insert
        $idBill = $billing->addBilling($fname,$lname,$email,$city,$country,$tel);
        //
                for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
                        $name = $_SESSION['cart'][$i][0];
                        $image = $_SESSION['cart'][$i][1];
                        $price = $_SESSION['cart'][$i][2];
                        $quantity = $_SESSION['cart'][$i][3];
                        $billing->addCart($name,$image,$price,$quantity,$idBill);
                        echo $idBill;
                }
                header('location:billings.php');
        
             
?>