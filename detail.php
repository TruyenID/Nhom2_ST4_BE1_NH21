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
					<input type="submit" name ="addcart" syle="margin:none" value ="Add to cart">			
					</button>
					</div>
					<input type="hidden" name="quantity" value="1">
					<input type="hidden" name="hidden_name" value="<?php echo $value['name'];?>">
					<input type="hidden" name="hidden_price" value="<?php echo $value['price'];?>">
					<input type="hidden" name="hidden_image" value="<?php echo $value['image'];?>">
				</form>
            </div>
            <div class="clear-both">
                <p>
                    <?php echo $value['description']?>
                </p>
            </div>
            <?php endforeach; ?>

        </div>     
    </div>
</body>
</html>
