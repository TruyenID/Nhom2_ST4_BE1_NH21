<?php include "header.php"; ?>
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
		<!-- BREADCRUMB -->
					<div class="container">
						<!-- store products -->
						<div class="row">
							<?php
							if(isset($_GET['keyword'])):
								$keyword = $_GET['keyword'];
								$search = $product->search($keyword);
								foreach($search as $value):
							?>
							<!-- product -->
							<div class="col-md-3 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
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
							<?php
							endforeach;
							?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php 	
							endif ;
						?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
<?php include "footer.html"; ?>