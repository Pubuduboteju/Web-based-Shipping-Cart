
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body id="main-body">
	<div id="top-bar" class="container">
		<div class="row">
			<div class="span2 col-md-2" id="logo">
				<a href="index.html" ><img  id="benzlogo" src="../../2017-29-07-20-52-53.jpeg" alt=""></a>
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
					<li><a href="../../login_system_2.profile.php">My Account <img class="user-menu-account-img" src="../../img/e180cbe3d456b5f11ab36459ccb56c5a.png"></a></li>
					<li><a href="cart.php">Your Cart <img class="user-menu-img" src="../../img/2222.jpeg"></a></li>
					<li><a href="../../user/checkout.php">Checkout</a></li>	
                    <?php
             if(isset($_SESSION['logged_in'])){

             if ($_SESSION['logged_in']){
             ?>                 
                 <li><a href="../../login_system_2/profile.php"><img  class="user-menu-login-img" src="../../img/ppp.jpeg">Login</a></li>          
                  <?php 
                } 
            }else {
                    ?>
                    <li><a href="../../login_system_2/index.php"><img  class="user-menu-login-img" src="../../img/ppp.jpeg">Login</a></li>
                    <?php
                }

            
            ?>


					<!--<li><a href="../../login_system_2/index.php"><img  class="user-menu-login-img" src="../../img/ppp.jpeg">Login</a></li>-->		
				</ul>
				<form method="POST" action="../../search.php" class="search_form">
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
					<div id="home-id" class="home-page col-md-4"><a href="../../index.php"> Deals on Miniature Wheels-Home</a></div>
					<div class="col-md-8" id="menu-div">
					<nav id="menu" class="pull-right class="navbar navbar-default""> 
	        			<ul >
							<li><a href="./products.html"><img class="menu-logo-benz" src="../../img/bbbbbb.jpeg"> Merc-Benz </a>					
									<ul>
										<li><a href="../../html/Product/Products.php?id=a&bra=merc&name=Mercedes-Benz A-Class">A-Class</a></li>									
										<li><a href="../../html/Product/Products.php?id=b&bra=merc&name=Mercedes-Benz B-Class">B-Class</a></li>
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
							<li><a href="./products.html"><img class="menu-logo" src="../../img/bmw-logo-F4A92B9BC1-seeklogo.com.png"> BMW</a>
                                	<ul>
                                    	<li><a href="../../html/Product/Products.php?id=one&bra=bmw&name=BMW 1 Series">1 Series</a></li>
                                    	<li><a href="../../html/Product/Products.php?id=two&bra=bmw&name=BMW 2 Series">2 Series</a></li>
                                    	<li><a href="./products.html">3 Series</a></li>
                                    	<li><a href="./products.html">4 Series</a></li>
                                    	<li><a href="./products.html">5 Series</a></li>
                                    	<li><a href="./products.html">6 Series</a></li>
                                    	<li><a href="./products.html">7 Series</a></li>
                                    	<li><a href="./products.html">afafafaf</a></li>
                                    	<li><a href="./products.html">fafsfafsa</a></li>
                                	</ul>
                            </li>    	
							<li><a href="./products.html"><img class="menu-logo-lam" src="../../img/Lamborghini-logo-1920x1080.png"> Lamborghini</a>
                                	<ul>
                                    	<li><a href="../../html/Product/Products.php?id=aven&bra=lam&name=Lamborghini Aventador">Aventador</a></li>
                                    	<li><a href="../../html/Product/Products.php?id=gall&bra=lam&name=Lamborghini Gallardo">Gallardo</a></li>
                                    	<li><a href="./products.html">Murcielago</a></li>
                                    	<li><a href="./products.html">Huracan</a></li>
                                    	<li><a href="./products.html">SV</a></li>
                                    	<li><a href="./products.html">Miura</a></li>
                                    	<li><a href="./products.html">Sesto-Elemento</a></li>
                                    	<li><a href="./products.html"></a></li>
                                	</ul>
                            </li>
							<li><a href="./products.html"><img class="menu-logo-fer" src="../../img/Ferrari-emblem-1920x1080.png"> Ferrari</a>
                                	<ul>
                                    	<li><a href="../../html/Product/Products.php?id=lafe&bra=fera&name=Ferrari Laferrari">La Ferrari</a></li>
                                        <li><a href="./products.html">Ferrari 458</a></li>
                                        <li><a href="./products.html">458 Spider</a></li>
                                        <li><a href="./products.html">458 GTB</a></li>
                                        <li><a href="./products.html">458 Speciale</a></li>
                                	</ul>
                            </li>
                            <li><a href="./products.html"><img class="menu-logo-mini" src="../../img/mini-cooper-logo-2B30B836FE-seeklogo.com.png"> Mini-Cooper</a>					
									<ul>
										<li><a href="../../html/Product/Products.php?id=classic&bra=mini&name=Mini Cooper- Classic">Cooper-Classic</a></li>									
										<li><a href="../../html/Product/Products.php?id=cooper-S&bra=mini&name=Mini Cooper-S">Cooper-S</a></li>
																
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

