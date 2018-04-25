<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"accounts");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="../cssn/bootstrap.css">

    
    
    
  </head>

  <body style="background-color: black;">

  <div style="color: white; border-bottom: 3px solid red; font-size: 30px; margin: 30px;">
  	<p>
  		Admin Login - Deals on Miniature Wheels
  	</p>
  </div>

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header" style="background-color: rgba(109, 18, 206,0.6)">Admin Log in</h2>

  <form class="login-container" name="form1" action="" method="post">
    <p><input type="text" placeholder="Email" required name="username"></p>
    <p><input type="password" placeholder="Password" required name="pwd"></p>
    <p><input type="submit" name="submit1" value="Log in"></p>
    <p><a style="background-color: blue" class="btn btn-primary pull-right" id="return" href="../index.php" role="button">Return-Home</a></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
	<?php
	if(isset($_POST["submit1"]))
	{
	
	
	$res=mysqli_query($link,"select * from admin_login where username='$_POST[username]' && password='$_POST[pwd]'");
	while($row=mysqli_fetch_array($res))
	{
	$_SESSION["admin"]=$row["username"];
	?>
	<script type="text/javascript">
	window.location="add_product.php";
	</script>
	<?php	
	}
	
	
	
	
	}
	
	?>
    
    
    
  </body>
</html>
