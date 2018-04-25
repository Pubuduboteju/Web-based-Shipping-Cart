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
$connect = mysqli_connect("localhost", "root", "", "accounts");

?>
      
        <div class="grid_10">
            <div class="box round first">
                <h2>
                   View Product</h2>
                <div class="block">
                <style type="text/css">
                	input{
                		width: 530px;
                		height: 30px;
                		font-size: 20px;
                	}
                </style>
                    
					<!--<form name="form1" action="" method="post" enctype="multipart/form-data">
					<table class="table table-hover" border="1" style="margin-left: 200px; width: 700px; font-size: 20px; ">
					<tr>
					<td>Product Name</td>
					<td><input type="text" name="pnm" value="" placeholder="Mercedes-Benz"></td>
					</tr>
					<!--<tr>
					<td>Product Price</td>
					<td><input type="text" name="pprice" value="" placeholder="100"></td>
					</tr>
					<tr>
					<td>New Quantity</td>
					<td><input type="text" name="pqty" value="" placeholder="20"></td>
					</tr>
					<!--<tr>
					<td>Product Image</td>
					<td><input type="file" name="pimage"></td>
					</tr>
					<tr>
					<td>Product Categoty</td>
					<td><input type="text" name="pcategory">
					</td>
					</tr>
					<tr>
					<td>Product Brand</td>
					<td>
					<input type="text" name="pdesc">
			        </td>
					</tr>-->
				<!--	<tr>
					<td colspan="2" align="center"><input type="submit" name="submit6" value="View Product"></td>
				</tr>
					
					
					</table>
					
					
					</form>-->

<?php

  /* $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./../img/admin/".$v3.$fnm;
   $dst1="../../img/admin/".$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);*/
   
//echo $KeyWord;
$sql = "SELECT * FROM users ";
$result = $connect->query($sql);

   ?>

   <div style=" margin-right: auto; margin-left: auto; width:1000px">
<div style="clear:both"></div>
    <h2 style="color: grey">User Detalis</h2>
    <div class="table-responsive" style="color: black">
    <table class="table table-bordered">
    <tr>
    <th width="20%">First Name</th>
        <th width="20%">Last Name</th>
    <th width="40%">E-mail</th>
    

 
    </tr>
    <?php
   // if(!empty($_SESSION["cart"]))
   // {
       // $total = 0;
       // foreach($_SESSION["cart"] as $keys => $values)
    if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
       // {
            ?>
            <tr>
            
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td> <?php echo $row["email"]; ?></td>
          
            
            </tr>
            <?php 
           
        }
          
} else {
    echo "0 results";
}
       
       
    
    ?>
    </table>
    </div>
</div>
<div>






				
					
                </div>
            </div>
<?php
include "footer.php";  
  
?>         
     