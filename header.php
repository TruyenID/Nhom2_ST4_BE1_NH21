<?php
session_start();
if(!isset($_SESSION['accesstimes'])) $_SESSION['accesstimes'] = 0;
else  $_SESSION['accesstimes'] += 1;
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
$getProduct = $product->getAllProduct();
require "protype.php";
$protype = new protype;
$getAllProtype = $protype->getAllProtype();
?>
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
<!-- HEADER -->
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
						<li style="color: #FFF;font-style: oblique;">Access times: <?php if(isset($_SESSION['accesstimes']))  echo $_SESSION['accesstimes']?> </li>
					</ul>					
					<ul class="header-links pull-right">			
						<li><a href="billing.php"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="login.php"><i class="fa fa-user-o"></i>My Account</a></li>					
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form  method="get"	action="result.php";>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" name="keyword" placeholder="Search here">
									<button type="submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="whistlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="cart.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
        <!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<?php
						$getAllProtype = $protype->getAllProtype();
						foreach ($getAllProtype as $value):
						?>
						<li><a href="products.php?type_id=<?php echo $value['type_id'] ?>">
						<?php echo $value['type_name'] ?></a></li>
						<?php endforeach;?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->