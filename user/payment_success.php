<?php
session_start();
if($_SESSION["paypalphp"]=="")
{
    ?>
   <!-- <script type="text/javascript">
        window.location="../index.php";
    </script>-->
<?php

}
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"accounts");
$order_id=$_GET["id"];


//this is for getting record from temp table to permanent table
$res=mysqli_query($link,"select * from checkout_address where id=$order_id");
while($row=mysqli_fetch_array($res))
{
    $fname=$row["firstname"];
    $lname=$row["lastname"];
    $email=$row["email"];
    $address=$row["address"];
    $city=$row["city"];
    $pincode=$row["pincode"];
    $contactno=$row["contactno"];
}
mysqli_query($link,"insert into confirm_order_address(firstname,lastname,email,address,city,pincode,contactno) values('$fname','$lname','$email','$address','$city','$pincode','$contactno')");

//now need to get permanent table order id

$res=mysqli_query($link,"select id from confirm_order_address order by id desc limit 1");
while($row=mysqli_fetch_array($res))
{
    $id=$row["id"];
}

//foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
//{
    //$values11 = explode("__", $value);
         $order_id=$_GET["id"];
         $total=  $_SESSION["pay"]  ;
          $item_name = $_SESSION["p_name"]  ;
         $product_price  = $_SESSION["price"] ;
          $item_quantity=  $_SESSION["qty"] ;


    mysqli_query($link,"insert into confirm_order_product(order_id,product_name,product_price,product_qty,product_total) values('$order_id','$item_name',  $product_price, $item_quantity,'$total')");
//}


echo "your order get successfully, we deliver product soon";

$_SESSION["pay"]="";
$_SESSION["paypalphp"]="";
 $_SESSION["p_name"]=""  ;
 $_SESSION["price"] ="";
 $_SESSION["qty"]="" ;


?>

<script type="text/javascript">

    setTimeout(function(){
        window.location="../index.php";

    },3000);

</script>
