
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
		<?php include "header.php"?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">									
								<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab3">Tablet</a></li>
									<li><a data-toggle="tab" href="#tab4">Smart Watchs</a></li>	
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php 									
											$getNProductLapTop = $product->getNProductLapTop();								
											foreach ($getNProductLapTop as $value):
										?>
										<!-- product -->
										
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
												<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
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
										
										<!-- /product -->
										<?php  endforeach;?>		
																			
									</div>	
															
								</div>	
								<!-- tab -->
								<!-- tab -->
								<div id="tab2" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php 									
											$getNProductSmartPhone = $product->getNProductSmartPhone();								
											foreach ($getNProductSmartPhone as $value):
										?>
										<!-- product -->
										
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
												<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
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
										
										<!-- /product -->
										<?php  endforeach;?>		
																			
									</div>	
															
								</div>	
								<!-- tab -->
								<!-- tab -->
								<div id="tab3" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php 									
											$getNProductTablet = $product->getNProductTablet();								
											foreach ($getNProductTablet as $value):
										?>
										<!-- product -->
										
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
												<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
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
										<!-- /product -->
										<?php  endforeach;?>		
																
									</div>	
															
								</div>	
								<!-- tab -->	
								<!-- tab -->
								<div id="tab4" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php 									
											$getNProductAcc = $product->getNProductAcc();								
											foreach ($getNProductAcc as $value):
										?>
										<!-- product -->
										
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
												<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
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
										
										<!-- /product -->
										<?php  endforeach;?>		
																			
									</div>	
															
								</div>	
								<!-- tab -->						
							</div>
									
						</div>
						
					</div>			
						
					<!-- Products tab & slick -->
					
				</div>
							
				<!-- /row -->
				
			</div>	
				
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab5">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab6">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab7">Tablets</a></li>
									<li><a data-toggle="tab" href="#tab8">Smart Watchs</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								
								<div id="tab5" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getNProductLapTop as $value): ?>
										<!-- product -->
										
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
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
										
										<!-- /product -->
										<?php endforeach ?>
									</div>
								</div>
								
								<!-- /tab -->
								<!-- tab -->
								
								<div id="tab6" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getNProductSmartPhone as $value): ?>
										<!-- product -->
										
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
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
										
										<!-- /product -->
										<?php endforeach ?>
									</div>
								</div>
								
								<!-- /tab -->
								<!-- tab -->
								
								<div id="tab7" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getNProductTablet as $value): ?>
										<!-- product -->
										
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
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
										
										<!-- /product -->
										<?php endforeach ?>
									</div>
								</div>
								
								<!-- /tab -->
								<!-- tab -->
								
								<div id="tab8" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getNProductAcc as $value): ?>
										<!-- product -->
										
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
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
										
										<!-- /product -->
										<?php endforeach ?>
									</div>
								</div>
								
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Smartphone</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-3">
						<?php 
							$smartphones = $product->getSmartphones();
								foreach ($smartphones as $value):
						?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
							<div>
								
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Laptop</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-4">
						<?php 
							$laptop = $product->getLaptops();
								foreach ($laptop as $value):
						?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>	
							<div>
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Smartwatch</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
						<?php 
							$Smartwatch = $product->getSmartwatch();
								foreach ($Smartwatch as $value):
						?>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>	
							<div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php include "footer.php" ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
