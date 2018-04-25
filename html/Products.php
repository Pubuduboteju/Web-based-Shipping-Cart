<?php
//$cat =  $_GET["id"];
//$Name = $_GET["name"];
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

</head>
<body>
	        <div class="container" id="main-box">

	            <div class="row carousel-holder" id="top-bar">
                    <div class="col-md-8">
                    <h1 id="main-heading"><?php echo  $_GET["name"]; ?></h1>
                    </div>
                    <div class="col-md-4" id="return-div">
                    <a class="btn btn-primary" id="return" href="../../index.php" role="button">Return</a>
                    </div>
                </div>

	            	<p id="description">The Mercedes-Benz A-Class is a compact car (subcompact in its first two generations) produced by the German automobile manufacturer Mercedes-Benz. The first generation (W168) was introduced in 1997, the second generation model (W169) appeared in late 2004, and the third generation model (W176) was launched in 2012.
                    Originally launched only as a four-door hatchback in 1997, the second generation W169 introduced a three-door hatchback. In the markets that the A-Class is or has been sold in, it has represented the entry level model of Mercedes-Benz. Having grown by 68 cm (27 in) since the original model, the 2012 A-class is now longer than the first-generation B-class.</p>
                   
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
                        <div class="thumbnail">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $row["price"]; ?></h4>
                                <h4><a href="#"><?php echo $row["p_name"]; ?></a>
                                </h4>
                                 <input type="text" name="quantity" class="form-control" value="" placeholder="quantity">
                                <div class="button">
                                    <button type="button" class="btn btn-default " > Add to
                                    <span class="fa fa-shopping-cart" ></span>
                                </button>
                                </div>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
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
                    </div>
                      <?php
                   }
                 }
                 ?>

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
           </div>
            <script src="../../js/bootstrap.js" type="text/javascript"></script>
            
                <?php include('../../footer.php'); ?>
                ajgfiugawiqiwytfiygwyigifygyF

               
            



