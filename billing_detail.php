<?php
	session_start();
    include "header.php";
    require "models/billing.php";
    $billing = new Billing();
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
			<form action="addbill.php" method="post">
				<div class="row">
					<div class="col-md-7">
						<!-- Billing Details -->
                        <?php
                         if(isset($_GET['id_bill']))
                            $idBill = $_GET['id_bill'];
                            $getBillingById = $billing->getBillingById($idBill);
                            foreach ($getBillingById as $value):
                        ?>
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing</h3>
							</div>
							<div class="form-group">
								<?php echo $value['fname']?>
							</div>
							<div class="form-group">
                            <?php echo $value['lname']?>
							</div>
							<div class="form-group">
                            <?php echo $value['email']?>
							</div>
							<div class="form-group">
                            <?php echo $value['city']?>
							</div>
							<div class="form-group">
							<?php echo $value['country']?>
							</div>
							<div class="form-group">
							<?php echo $value['tel']?>
							</div>
						</div>
						<a href="billings.php" class="primary-btn order-submit">Return</a>
						<?php endforeach; ?>							
						<!-- /Billing Details -->
					</div>

					<!-- Order Details -->
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
                            if(isset($_GET['id_bill']))
                                $idBill = $_GET['id_bill'];
                                $getAllCart = $billing->getAllCart($idBill);
                                foreach ($getAllCart as $value):
                            ?>
							<div class="order-products">
								<div class="order-col">
									<div><?php echo $value['quantity']?>x <?php echo $value['name']?></div>
									<div><?php echo $value['price']?></div>
								</div>
							</div>
                            <?php endforeach; ?>
						</div>
					</div>
					<!-- /Order Details -->
				</div>
				</form>
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
