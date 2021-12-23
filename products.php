<?php
include "header.php";	
$product = new Product;
$getAllProducts = $product->getAllProducts();
$getProduct = $product->getAllProduct();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- STORE -->
					<div id="store" class="col-md-9">
						

						<!-- store products -->
						<div class="row">
							<?php
							if(isset($_GET['type_id'])):
								$type_id = $_GET['type_id'];
								$getProductByType = $product->getProductByType($type_id);
								//hiển thị 3 sản phẩm trên 1 trang
								$perpage = 3;
								//Lấy số trang trên thanh địa chỉ
								$page = isset($_GET['page'])?$_GET['page']:1;
								//Tính số dòng, ví dụ kết quả là 18
								$total = count($getProductByType);
								//Lấy đường dẫn đến file hiện hàng
								$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;
							 	$get3ProductByType = $product->get3ProductByType($type_id,$page,$perpage);
								foreach ($get3ProductByType as  $value):
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<form action="whistlist.php?id=<?php echo $value['id']?>" method="post">
											<div class="product-btns">			
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">
												add to wishlist
												</span></button>
												<input type="hidden" name="hidden_id" value="<?php echo $value['id'];?>">
												<input type="hidden" name="hidden_name" value="<?php echo $value['name'];?>">
												<input type="hidden" name="hidden_price" value="<?php echo $value['price'];?>">
												<input type="hidden" name="hidden_image" value="<?php echo $value['image'];?>">
												<input type="hidden" name="quantity" value="1">
											</div>
										</form>
										<form action="detail.php?id=<?php echo $value['id']?>" method="post">
											<div class="product-btns">	
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>	
											<input type="hidden" name="hidden_typeId" value="<?php echo $value['type_id'];?>">
										</form>	
									</div>
									<form action="cart.php" method="post">
											<div class="add-to-cart">
												<button class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i>
												<input type="submit" name ="addcart" syle="margin:none" value ="Add to cart">			
												</button>
											</div>
											<input type="hidden" name="quantity" value="1">
											<input type="hidden" name="hidden_name" value="<?php echo $value['name'];?>">
											<input type="hidden" name="hidden_price" value="<?php echo $value['price'];?>">
											<input type="hidden" name="hidden_image" value="<?php echo $value['image'];?>">
											
											</form>
								</div>
							</div>
							<!-- /product -->
									<?php endforeach; ?>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<?php echo $product->paginate($url,$total,$perpage) ?>
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php endif; ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		
		<!-- FOOTER -->
		<?php include "footer.html"; ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>