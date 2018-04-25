<?php
session_start();
//if($_SESSION["admin"]=="")

?>
<?php

include "header.php";
include "menu.php";
?>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"accounts");
?>
      
        <div class="grid_10">
            <div class="box round first">
                <h2>
                   Add new Admin</h2>
                <div class="block">
                <style type="text/css">
                	input{
                		width: 530px;
                		height: 30px;
                		font-size: 20px;
                	}
                </style>
                    
					<form name="form1" action="" method="post" enctype="multipart/form-data">
					<table class="table table-hover" border="1" style="margin-left: 200px; width: 700px; font-size: 20px; ">
					<tr>
					<td>Admin Username</td>
					<td><input type="text" name="username" value="" placeholder="Username"></td>
					</tr>
					<!--<tr>
					<td>Product Price</td>
					<td><input type="text" name="pprice" value="" placeholder="100"></td>
					</tr>
					<tr>
					<td>Product Quantity</td>
					<td><input type="text" name="pqty" value="" placeholder="20"></td>
					</tr>
					<tr>
					<td>Product Image</td>
					<td><input type="file" name="pimage"></td>
					</tr>
					<tr>
					<td>Product Categoty</td>
					<td><input type="text" name="pcategory">
					</td>
					</tr>-->
					<tr>
					<td>Password</td>
					<td>
					<input type="Password" name="password" placeholder="Password">
			        </td>
					</tr>
					<tr>
					<td colspan="2" align="center"><input type="submit" name="submit4" value="Add new Admin"></td>
				</tr>
					
					
					</table>
					
					
					</form>

<?php
if(isset($_POST["submit4"]))
{
  /* $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./../img/admin/".$v3.$fnm;
   $dst1="../../img/admin/".$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);*/



mysqli_query($link,"insert into admin_login (username, password) values('$_POST[username]','$_POST[password]')");



}

?>									
					
					
                </div>
            </div>
<?php
include "footer.php";  
  
?>         
     