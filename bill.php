<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/billing_detail.php";
include "libCart.php";
$billing = new Billing();
    if(isset($_POST['billing']) && ($_POST['billing'])){
        //lay thong tin don hang
        $fname =  $_POST['first-name'];
        $lname =  $_POST['last-name'];
        $email =  $_POST['email'];
        $city = $_POST['city'];
        $country =  $_POST['country'];
        $tel =  $_POST['tel'];
        $total = showTotal();
        //$pttt = $_POST['payment'];
        echo "Đặt hàng thành công. Đơn hàng của bạn là!";
        //insert
        $idbill = $billing->taoDonHang($fname,$lname,$email,$city,$country,$tel,$total);
        //
        for($i = 0; $i < sizeof($_SESSION['cart']); $i++) { 
            # code...
            $name = $_SESSION['cart'][$i][0];
            $image =$_SESSION['cart'][$i][1];
            $price = $_SESSION['cart'][$i][2];
            $quantity = $_SESSION['cart'][$i][3];
            $total = $price * $quantity;
            $billing -> taoDonHang($name,$image,$price,$quantity,$idbill);
        }
    }
?>