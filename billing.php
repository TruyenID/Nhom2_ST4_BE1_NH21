<?php
session_start();
if(isset($_POST['first-name'])){$_SESSION['fname'] = $_POST['first-name'];}
if(isset($_POST['last-name'])){$_SESSION['lname'] = $_POST['last-name'];}
if(isset($_POST['email'])){$_SESSION['email'] = $_POST['email'];}
if(isset($_POST['city'])){$_SESSION['city'] = $_POST['city'];}
if(isset($_POST['country'])){$_SESSION['country'] = $_POST['country'];}
if(isset($_POST['tel'])){$_SESSION['tel'] = $_POST['tel'];}  
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
		<?php include "header.php"?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing</h3>
							</div>
							<div class="form-group">
								<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];}?>
							</div>
							<div class="form-group">
							<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>
							</div>
							<div class="form-group">
							<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>
							</div>
							<div class="form-group">
							<?php if(isset($_SESSION['city'])){echo $_SESSION['city'];}?>
							</div>
							<div class="form-group">
							<?php if(isset($_SESSION['country'])){echo $_SESSION['country'];}?>
							</div>
							<div class="form-group">
							<?php if(isset($_SESSION['tel'])){echo $_SESSION['tel'];}?>
							</div>
							<form action="deleteBilling.php" method="post">
							<button class="primary-btn order-submit">
							Delete Billing
							</button>	
												
							</form>
						</div>
						<!-- /Billing Details -->
					</div>
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Products</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<?php
								if(isset($_SESSION['cart']) && $_SESSION['cart'] && (is_array($_SESSION['cart']))){
									$total = 0;
    								for($i = 0; $i < sizeof($_SESSION['cart']); $i++){
      								$total += ($_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][3]);
										echo '
										<div class="order-products">
										<div class="order-col">
											<div>'.$_SESSION['cart'][$i][3].'x '.$_SESSION['cart'][$i][0].'</div>
											<div>'.number_format($_SESSION['cart'][$i][2]).' VND</div>
										</div>
										</div>
											';
										
									}
									echo '<div class="order-col">
										<div><strong>TOTAL</strong></div>
										<div><strong class="order-total">'. number_format($total).'</strong></div>
										</div>';
								}

							?>
							
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- /row -->
				
				
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php include "footer.html" ?>
		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
