<?php
//$cat =  $_GET["id"];
//$Name = $_GET["name"];
$id = $_GET["id"];
session_start();
$connect = mysqli_connect("localhost", "root", "", "accounts");






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo  $_GET["name"]; ?></title>

	<link href="../../cssn/bootstrap.min.css" rel="stylesheet">
	<link href="../../cssn/shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Corporate_A/ufonts_com_corporate_a_regular_1_.tff">
    <link rel="stylesheet" type="text/css" href="../cssn/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../cssn/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
  
    
    <link rel="stylesheet" type="text/css" href="../../navbar.css"> 
    <link rel="stylesheet" type="text/css" href="../../imageslider.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Corporate_A/ufonts_com_corporate_a_regular_1_.tff">
    
    <link rel="stylesheet" type="text/css" href="cssn/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cssn/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="cssn/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="cssn/bootstrap-theme.min.css"> 
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="../../js/jquery.php"></script>
    <script type="text/javascript" src="zoomjs.js"></script>
    <script type="text/javascript" src="jquery.flexslider-min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

</head>
<body>

   <?php include('../../header.php')  ?>
	        <div class="container" id="main-box">

	            <div class="row carousel-holder" id="top-bar">
                    <div class="col-md-8">
                    <h1 id="main-heading"><?php echo  $_GET["name"]; ?></h1>
                    </div>
                    <div class="col-md-4" id="return-div">
                    <a class="btn btn-primary" id="return" href="../../index.php" role="button">Return-Home</a>
                    </div>
                </div>

	            	<p style="line-height: 1.6" id="description">The <b><?php echo  $_GET["name"]; ?></b> is a compact car (subcompact in its first two generations) produced by the German automobile. The first generation (W168) was introduced in 1993, the second generation model (W169) appeared in late 2004, and the third generation model (W176) was launched in 2012.
                    Originally launched only as a four-door hatchback in 1997, the second generation W169 introduced a three-door hatchback. In the markets that the A-Class is or has been sold in, it has represented the entry level. Having grown by 68 cm (27 in) since the original model, the 2012 is now longer than the first-generation-<?php echo  $_GET["name"]; ?>-class.</p>
                   
                    <!--<div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="14482829_1102189333167813_7241537477800886272_n.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>-->

                <div class="row" id="product-grid">
                    <?php
                        $cat = $_GET["id"];
                        $brnd = $_GET["bra"];
                        $query = "SELECT * FROM products where catgry ='$cat' and brand ='$brnd' ORDER BY id ASC";
                        $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row = mysqli_fetch_array($result))
                            {
                            ?>
                   
                    <div class="col-sm-4 col-lg-4 col-md-4 ">
                     <form method="post" action="cartf.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div class="thumbnail">
                            <div class="zoom-grid">
                                 <div class="flexslider">
                                    <div class="thumb-image"><img style="padding-left: 20px; "  src="<?php echo $row["image"]; ?>" data-imagezoom="true" class="img-responsive" >
                                        </div>
                                    </div>
                            </div>






                            <!--<img src="<?php echo $row["image"]; ?>" class="img-responsive">-->
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $row["price"]; ?></h4>
                                <h4><a style="box-shadow: 5px 5px 5px #888888;border-radius: 5px" href="#"><?php echo $row["p_name"]; ?></a>
                                </h4>
                                 <div class=" style="background-color: white; height: 30px;">
                                    <div class="col-md-4" style="width: 110px; height: 20px; float: left; margin-right: 0px;">
                                       
                                 <p  style="padding-right: 0px;box-shadow: 5px 5px 5px #888888;border-radius: 5px">Available Quantity  <?php echo $row["qty"]; ?></p>

                                    </div>
                                    <div class="col-md-8" style="  margin-bottom:60px; padding-left: 150px;">
                                       <input style="padding-right: 5px; text-align:right; width: 60px;   border: 1px solid #888888;border-radius: 10px; box-shadow: 5px 5px 5px #888888;" type="text" name="quantity" class="" value="1" placeholder="quantity">  
                                    </div>
                                     
                                 </div>
                                <div style="padding-top: 30px;" class="button">
                                    <button type="submit" name="add" class="btn btn-default " > Add to cart
                                    <span class="fa fa-shopping-cart" ></span>
                                </button>
                                </div>
                                <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_qty" value="<?php echo $row["qty"];?>">
                                <input type="hidden" name="hidden_brand" value="<?php echo $row["brand"];?>">
                                <input type="hidden" name="hidden_cat" value="<?php echo $row["catgry"];?>">

                            </div>
                            
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="   fa fa-star"></span>
                                    <span class="   fa fa-star"></span>
                                    <span class="   fa fa-star"></span>
                                    <span class="   fa fa-star"></span>
                                    <span class=" fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                      <?php
                   }
                 }
                 ?>

                  <div style="clear:both"></div>
    <h2 style="color: grey">My Shopping Cart</h2>
    <div class="table-responsive" style="color: white">
    <table class="table table-bordered">
    <tr>
    <th width="20%">Product Image</th>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
    if(!empty($_SESSION["cart"]))
    {
        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        {
            ?>
            <tr>
            <td><div style="padding: 10px; padding-left: 30px;"><img src="<?php echo $values["item_image"]; ?>" height="100" width="150" ></div></td>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="cartf.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $values["product_price"]);
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    

                   <!-- <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../../img/Mercedes-Benz/A-Class/01-Mercedes-Benz-A-Class-01-720x509.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <div class="button">
                                    <button type="button" class="btn btn-default " > Add to
                                    <span class="fa fa-shopping-cart" ></span>
                                </button>
                                </div>
                            </div>
                            
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../../img/Mercedes-Benz/A-Class/26-Mercedes-A.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../../img/Mercedes-Benz/A-Class/AETV38539755_1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../../img/Mercedes-Benz/A-Class/14946086062_c3180179ff.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../../img/Mercedes-Benz/A-Class/maxresdefault.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>-->
                 <!--<?php
   /* if(!empty($_SESSION["cart"]))
    {
        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        {
            ?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="cart.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $values["product_price"]);
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
    }*/
    ?>-->
           </div>
            <script src="../../js/bootstrap.js" type="text/javascript"></script>


             <script type="text/javascript" src="../../js/jquery.php"></script>
    <script type="text/javascript" src="zoomjs.js"></script>
    <script type="text/javascript" src="jquery.flexslider-min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>


            <?php include('../../footer.php'); ?>
