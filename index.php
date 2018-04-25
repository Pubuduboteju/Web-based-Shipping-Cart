<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deals on Miniature Wheels</title>
	<link rel="stylesheet" type="text/css" href="navbar.css"> 
	<link rel="stylesheet" type="text/css" href="imageslider.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Corporate_A/ufonts_com_corporate_a_regular_1_.tff">
	
	<link rel="stylesheet" type="text/css" href="cssn/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="cssn/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cssn/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="cssn/bootstrap-theme.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/jquery.flexslider-min.js"> </script>
   <script type="text/javascript" src="js/zoomjs.js"></script>
   <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="assets/gridloading/css/component.css">

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>

	

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.css">
	

	<link rel="stylesheet" href="assets/gridloading/css/component.css">
	<link rel="stylesheet" href="assets/animate.css" >
	<link rel="stylesheet" href="assets/css/style.css">



</head>
<body id="main-body">
	<div id="top-bar" class="container">
		<div class="row">
			<div class="span2 col-md-2" id="logo">
				<a href="index.html" ><img  id="benzlogo" src="2017-29-07-20-52-53.jpeg" alt=""></a>
			</div>
			<div class="span2 clo-md-2" id="main-name-div">
        		<h1 id="main-name">Deals on Miniature Wheels</h1>
        	</div>
        	<!--<div class="span4 col-md-2">
        		<form method="POST" class="search_form">
					<input type="text" class="input-block-level search-query" Placeholder="Search">
				</form>
			</div>-->
			<div class="span2 col-md-8" id="user-menu-div">
	        	<ul class="user-menu">				
					<li><a href="login_system_2/profile.php">My Account <img class="user-menu-account-img" src="img/e180cbe3d456b5f11ab36459ccb56c5a.png"></a></li>
					<li><a href="html/Product/cart.php">Your Cart <img class="user-menu-img" src="img/2222.jpeg"></a></li>
					<li style="width: 65px;"><a href="user/checkout.php" style="padding: 0px; margin: 0px; width: 10px;">Checkout</a></li>
					<li style="width: 80px;"><a href="admin/admin_login">Admin<img style="width: 20px; height: 20px; padding-bottom: 4px;" src="img/user-settings-icon.png"></a></li>	<?php
             if(isset($_SESSION['logged_in'])){

			 if ($_SESSION['logged_in']){
			 ?>					
					<li style="width: 54px;"><a href="login_system_2/profile.php"><img  class="user-menu-login-img" src="img/ppp.jpeg">Login</a></li>		
                  <?php 
				} 
			}else {
					?>
					<li style="width: 54px;"><a href="login_system_2/index.php"><img  class="user-menu-login-img" src="img/ppp.jpeg">Login</a></li>	
					<?php
				}

			
			?>
			<!--<a href="admin/admin_login">Admin<img style="width: 20px; height: 20px; padding-bottom: 4px;" src="img/user-settings-icon.png"></a>--></li>

				
				</ul>
				<form method="POST" action="search.php" class="search_form">
					<input type="text" name="word" class="input-block-level search-query" Placeholder="  Search">
					<!--<input type="submit" name="G" value="GO">-->
				</form>
			</div>
		</div>
	</div>

	<div id="part2">
      <nav "navbar navbar-default">
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu row" id="main-menu-div">
					<div id="home-id" class="home-page col-md-4"><a href="index.php"> Deals on Miniature Wheels-Home</a></div>
					<div class="col-md-8" id="menu-div">
					<nav id="menu" class="pull-right class="navbar navbar-default""> 
	        			<ul >
							<li><a href="./products.html"><img class="menu-logo-benz" src="img/bbbbbb.jpeg"> Merc-Benz </a>					
									<ul>
										<li><a href="html/Product/Products.php?id=a&bra=merc&name=Mercedes-Benz A-Class">A-Class</a></li>									
										<li><a href="html/Product/Products.php?id=b&bra=merc&name=Mercedes-Benz B-Class">B-Class</a></li>
										<li><a href="./products.html">CLA.</a></li>	
                                    	<li><a href="./products.html">GLA.</a></li>	
                                    	<li><a href="./products.html">C-Class</a></li>	
                                    	<li><a href="./products.html">GLC.</a></li>	
                                    	<li><a href="./products.html">E-Class</a></li>	
                                    	<li><a href="./products.html">GLE.</a></li>
                                    	<li><a href="./products.html">S-Class</a></li>
                                    	<li><a href="./products.html">SL</a></li>
                                    	<li><a href="./products.html">G-Class</a></li>
                                    	<li><a href="./products.html">CLS.</a></li>
                                    	<li><a href="./products.html">SLC.</a></li>
                                    	<li><a href="./products.html">GLS.</a></li>								
									</ul>
							</li>	
							<li><a href="./products.html"><img class="menu-logo" src="img/bmw-logo-F4A92B9BC1-seeklogo.com.png"> BMW</a>
                                	<ul>
                                    	<li><a href="html/Product/Products.php?id=one&bra=bmw&name=BMW 1 Series">1 Series</a></li>
                                    	<li><a href="html/Product/Products.php?id=two&bra=bmw&name=BMW 2 Series">2 Series</a></li>
                                    	<li><a href="./products.html">3 Series</a></li>
                                    	<li><a href="./products.html">4 Series</a></li>
                                    	<li><a href="./products.html">5 Series</a></li>
                                    	<li><a href="./products.html">6 Series</a></li>
                                    	<li><a href="./products.html">7 Series</a></li>
                                    	<li><a href="./products.html">afafafaf</a></li>
                                    	<li><a href="./products.html">fafsfafsa</a></li>
                                	</ul>
                            </li>    	
							<li><a href="./products.html"><img class="menu-logo-lam" src="img/Lamborghini-logo-1920x1080.png"> Lamborghini</a>
                                	<ul>
                                    	<li><a href="html/Product/Products.php?id=aven&bra=lam&name=Lamborghini Aventador">Aventador</a></li>
                                    	<li><a href="html/Product/Products.php?id=gall&bra=lam&name=Lamborghini Gallardo">Gallardo</a></li>
                                    	<li><a href="./products.html">Murcielago</a></li>
                                    	<li><a href="./products.html">Huracan</a></li>
                                    	<li><a href="./products.html">SV</a></li>
                                    	<li><a href="./products.html">Miura</a></li>
                                    	<li><a href="./products.html">Sesto-Elemento</a></li>
                                    	<li><a href="./products.html"></a></li>
                                	</ul>
                            </li>
							<li><a href="./products.html"><img class="menu-logo-fer" src="img/Ferrari-emblem-1920x1080.png"> Ferrari</a>
                                	<ul>
                                    	<li><a href="html/Product/Products.php?id=lafe&bra=fera&name=Ferrari Laferrari">La Ferrari</a></li>
                                    	<li><a href="./products.html">Ferrari 458</a></li>
                                    	<li><a href="./products.html">458 Spider</a></li>
                                    	<li><a href="./products.html">458 GTB</a></li>
                                    	<li><a href="./products.html">458 Speciale</a></li>
                                    	
                                	</ul>
                            </li>
                            <li><a href="./products.html"><img class="menu-logo-mini" src="img/mini-cooper-logo-2B30B836FE-seeklogo.com.png"> Mini-Cooper</a>					
									<ul>
										<li><a href="html/Product/Products.php?id=classic&bra=mini&name=Mini Cooper- Classic">Cooper-Classic</a></li>									
										<li><a href="html/Product/Products.php?id=cooper-S&bra=mini&name=Mini Cooper-S">Cooper-S</a></li>
																
									</ul>
							</li>	
                            <li><a href="./products.html">Other brands</a>
                            		<ul>
                            			<li><a href="./products.html">Auto-Art</a></li>
                            			<li><a href="./products.html">Welly</a></li>
                            			<li><a href="./products.html">Bburago</a></li>
                            			<li><a href="./products.html">Maisto</a></li>
                            			<li><a href="./products.html">Top-Mark</a></li>
                            		</ul>
                            	
                            </li>
                        </ul>
                    </nav>
                    </div>
				</div>
			</section>
		</div>
      </nav>
		<div id="imgslider" class=" row container-fluid">
	
			<section id="slider" class=" row container-fluid">
				<figure>

				<p id="p1" class="info animated fadeInDown" style="font-family: Lato;font-weight:300;font-size: 50px;line-height: 50px; color: ">Hi<br> <br>Welcome to <br><br>the Miniature world<br> <br><br><br><b><span style="color:black; font-family:Corporate A; font-size:25px;"> <br><img style="width: 90px; height: 70px;" src="img/car_logo_PNG1655.png"> DEALS
				ON <span>MINIAUTURE  </span><span> WHEELS-Official Website</span></span></b> </p>
				<img src="miniature-wedding-photography-ekkachai-saelow-17-578360a984a02-png__880.jpg">

				<img src="8d663e0123e73e9eb0d4b81a1f4b98d0.jpg">

				<img src="miniature-car-photos-elgin-park-michael-paul-smith-32.jpg"> 
				<img src="Miniature-couples-photography-best-micro-image-free.jpg">
				<img src="vVUW0j.jpg">
				<img src="Amazing Miniature Model Cars Pictured to Look Real (23).jpg"> 


				</figure>
			</section>
		</div>
	</div>
	<br>
	<br>
	<div id="works" class="portfolio spacer">
<div class="container">
<h2 class="center" style="color: white ;font-size:30px;"> Miniature World Gallery</h2>

	<ol class="grid effect-2" id="grid">
		<li>
			<div class="zoom-grid">
                                 <div class="flexslider">
                                    <div class="thumb-image"><img alt="portfolio" src="images/grid-image/11.jpg" data-imagezoom="true" class="img-responsive" >
                                        </div>
                                    </div>
                            </div>
		<div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/22.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/33.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/44.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/55.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/66.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/77.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/11.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/22.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/33.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/44.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/55.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/33.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/44.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/55.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/66.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/22.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/33.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/44.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
		
		<li><img alt="portfolio" src="images/grid-image/55.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="http://www.thebootstrapthemes.com" target="_blank"><i class="fa fa-link"></i> </a></span></div></li>
	</ol>
</div>

</div>

	<div id="footer" class="container">
		<div class="row" id="latter-bar">
			
			<div class="span2 col-md-3 details">
				<h3>About DMW</h3>
				<ul class="ul2">
					<li class="li2"><a class="a2" href="#">Company info</a></li>
					<li class="li2"><a class="a2" href="#">News</a></li>
					<li class="li2"><a class="a2" href="#">Advertise with us</a></li>
					<li class="li2"><a class="a2" href="#">Government relations</a></li>
					<li class="li2"><a class="a2" href="#">Policies</a></li>
					<li class="li2"><a class="a2" href="#">Tell us what you think</a></li>
				</ul>
			</div>
			<div class="span2 col-md-3 details">
				<h3>Buy</h3>
				<ul class="ul2">
					<li class="li2"><a class="a2" href="#">Registration</a></li>
					<li class="li2"><a class="a2" href="#">DMW Money Back Guarantee</a></li>
					<li class="li2"><a class="a2" href="#">Buying Help</a></li>
					<li class="li2"><a class="a2" href="#">Stores</a></li>
					<li class="li2"><a class="a2" href="#">DMW Local</a></li>
					<li class="li2"><a class="a2" href="#">DMW Guides</a></li>
				</ul>
			</div>
			<div class="span3 col-md-3 details">
				<h3>DMW Payment Products</h3>
				<ul class="ul2">
					<li class="li2"><a class="a2" href="#">DMW Rewards Visa Cards</a></li>
					<li class="li2"><a class="a2" href="#">Shop with Points</a></li>
					<li class="li2"><a class="a2" href="#">Credit Card Marketplace</a></li>
					<li class="li2"><a class="a2" href="#">Reload Your Balance</a></li>
					<li class="li2"><a class="a2" href="#">DMW Local</a></li>
					
				</ul>
			</div>
			<div class="span3 col-md-3 details">
				<h3>Let us Help you</h3>
				<ul class="ul2">
					<li class="li2"><a class="a2" href="#">Your Account</a></li>
					<li class="li2"><a class="a2" href="#">Your Orders</a></li>
					<li class="li2"><a class="a2" href="#">Shipping rates and Policies</a></li>
					<li class="li2"><a class="a2" href="#">Returns and Replacements</a></li>
					<li class="li2"><a class="a2" href="#">Resolution centre</a></li>
					<li class="li2"><a class="a2" href="#">DMW Assistant</a></li>
				</ul>
				
			</div>
			<br>

			<div id="find-us">
				<div id="find-us-div2">
				
					<p>	
						<h4 id="find-us-h4">Find us on</h4>
					</p>
					<p>
						<a href="https://www.facebook.com/miniaturemodelclub/">Facebook <img class="social-img" src="img/Social-logo/fb-art.png"></a>
					</p>
					<p>
						<a href="https://twitter.com//">Twitter <img class="social-img" src="img/Social-logo/f15ac5d59c61e34452a14f16546eb8a154c18d3e.png"></a>
					</p>
					<p>
						<a href="https://www.facebook.com/">Google+ <img class="social-img" src="img/Social-logo/allpixm--google-plus-logo-png-13.png"></a>
					</p>
					<p>
						<a href="https://www.facebook.com/">LinkedIn <img class="social-img" src="img/Social-logo/LinkedIn-Logo.png"></a>
					</p>
					<p>
						<a href="https://www.facebook.com/">Youtube <img class="social-img" src="img/Social-logo/YouTube-icon-full_color.png"></a>
					</p>
				</div>

			</div>

			<div id="copy-right-div">
				<p class="copy-right-p">Copyright &copy; 2000-2017 DMW Sri lanka. All Rights Reserved. <a href="#">User Agreement</a>, <a href="#">Privacy</a>, <a href="#">Cookiess</a></p>
		    </div>
		
			
			
		</div>
		
		
	</div>
     <a href="#top-bar" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

	<!-- gridloading script -->
		<script src="assets/gridloading/js/modernizr.custom.js"></script>
		<script src="assets/gridloading/js/masonry.pkgd.min.js"></script>
		<script src="assets/gridloading/js/imagesloaded.js"></script>
		<script src="assets/gridloading/js/classie.js"></script>
		<script src="assets/gridloading/js/AnimOnScroll.js"></script>

		<script src="assets/scripts.js"></script>
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/jquery.flexslider-min.js"> </script>
   <script type="text/javascript" src="js/zoomjs.js"></script>
   <script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>