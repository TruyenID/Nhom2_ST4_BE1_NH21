<?php 
session_start();
include "header.php";
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if(isset($_POST['whistlist']) && $_POST['whishlist']){
  $name = $_POST['hidden_name'];
  $image = $_POST['hidden_image'];
  $price = $_POST['hidden_price'];
  $quantity = $_POST['quantity'];
  //kiem tra sp co trung trong gio hang hay k
  $flag=0;

  for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
    if($_SESSION['cart'][$i][0]==$name){
      $flag=0;
      $quantityNew = $quantity+$_SESSION['cart'][$i][3];
      $_SESSION['cart'][$i][3]=$quantityNew;
      break;
    }
  }
  //neu ko trung thi them moi
  if($flag==0){
     //them moi sp vao cart
    $pd = [$name,$image,$price,$quantity];
    $_SESSION['cart'][]= $pd;
  }
 
}