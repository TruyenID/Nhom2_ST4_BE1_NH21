<?php
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
//xoa sp
  if(isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['cart'],$_GET['delid'],1);
  }
//lay du lieu tu form

if(isset($_POST['addcart']) && $_POST['addcart']){
  $name = $_POST['hidden_name'];
  $image = $_POST['hidden_image'];
  $price = $_POST['hidden_price'];
  $quantity = $_POST['quantity'];
  //kiem tra sp co trung trong gio hang hay k
  $flag=0;

  for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
    if($_SESSION['cart'][$i][0]==$name){
      $flag=1;
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
function showTotal(){
    $total = 0;
    if($_SESSION['cart'] && (is_array($_SESSION['cart']))){
    
    for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
      $total += ($_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][3]);
    }
    }
    return $total; 
}
function showCart(){
  if($_SESSION['cart'] && (is_array($_SESSION['cart']))){
    $total = 0;
    for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
      $total += ($_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][3]);
      echo '<tr>
            <td>'.$_SESSION['cart'][$i][0].'</td>
            <td><img src="./img/'.$_SESSION['cart'][$i][1].'" alt="loi" style="width:80px" ></td>
            <td class="project_progress">'.number_format($_SESSION['cart'][$i][2]).' VND</td>      
            <td class="project-state">'.$_SESSION['cart'][$i][3].'</td>
            <td class="project-actions text-right">
            <a class="btn btn-danger btn-sm" href="cart.php?delid='.$i.'">
              <i class="fas fa-trash">
              </i>
              Delete
            </a>
          </td>
          </tr>'; 
         }
      echo '<tr>
            <td>Total</td>
            <th>'. number_format($total).' VND</th>
            </tr>
            ';   
    }
}

?>