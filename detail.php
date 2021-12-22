
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body{
                font-family: arial;
            }
            .container-m{
                width: 1200px;
                margin: 0 auto;
                border: 1px solid #000;
                padding: 15px;
            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
            
            #product-detail{
                border-top: 1px solid #000;
                padding: 15px 0 0 0;
            }
            #product-img{
                width: 30%;
                float: left;
            }
            #product-info{
                float: right;
                width: 70%;
                text-align: left;
                padding-left: 30px;
            }
            #product-img img{
                max-width: 100%;
                padding: 5px;
                border: 1px solid #000;
                background: #eee;
            }
            h1{
                text-align: left;
                margin-top: 0;
            }
            label.add-to-cart{
                background: #000;
                border: 1px solid #000;
                margin-top: 15px;
                padding: 15px;
                display: inline-block;
                color: #fff;
            }
            label a{
                color: #FFF;
            }
            #gallery{
                margin-top: 10px;
            }
            #gallery ul{
                margin: 0;
                padding: 0;
            }
            #gallery ul li{
                width: 150px;
                float: left;
                list-style: none;
                margin-right: 5px;
                margin-bottom: 5px;
                height: 100px;
                text-align: center;
                padding: 5px;
                border: 1px solid #000;
                background: #eee;
            }
            #gallery ul li img{
                max-width: 100%;
                max-height: 100%;
                vertical-align: middle;
            }
            *{
                box-sizing: border-box;
            }
            
        </style>
</head>
<body>
    <?php include "header.php"?>
    <div class="container-m">
        <h2>Detail Product</h2>
        <?php 
            if(isset($_GET['id']))
                $id = $_GET['id'];
                $getProductById = $product->getProductById($id);
                foreach($getProductById as $value):
        ?>
        <div id="product-detail">
            <div id="product-img">
                <img src="./img/<?php echo $value['image']?>" alt="">
            </div>
            <div id="product-info">
                <h1><?php echo $value['name']?></h1>
                <label>Giá: </label><span class="product-price"><?php echo number_format($value['price'])?>VND</span><br>
                <form action="cart.php" method="post">
					<div class="add-to-cart">
					<button class="add-to-cart-btn">
					<i class="fa fa-shopping-cart"></i>
					<input class="addtocart" type="submit" name ="addcart" syle="margin:none" value ="Add to cart">			
					</button>
					</div>
					<input type="hidden" name="quantity" value="1">
					<input type="hidden" name="hidden_name" value="<?php echo $value['name'];?>">
					<input type="hidden" name="hidden_price" value="<?php echo $value['price'];?>">
					<input type="hidden" name="hidden_image" value="<?php echo $value['image'];?>">
				</form>
                <p style="margin-top: 20px;">
                    <?php echo $value['description']?>
                </p>
            </div>
            <div class="row">

            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Related Products</h3>
							
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
                                            $type_id = $_POST['hidden_typeId'];							
											$getProductByTypeId = $product->getProductByTypeId($type_id);								
											foreach ($getProductByTypeId as $value):
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
        <?php include "footer.html" ?>
		<!-- /SECTION -->
        <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>

