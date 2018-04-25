<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "accounts");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	

	<link href="../../cssn/bootstrap.min.css" rel="stylesheet">
	<link href="../../cssn/shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Corporate_A/ufonts_com_corporate_a_regular_1_.tff">
    <link rel="stylesheet" type="text/css" href="../cssn/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../cssn/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
  
    
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

</head>
<body>
  <?php include('../../header.php')   ?>
 <!-- <?php
 /* if(isset($_POST["add"]))
{
    if(isset($_SESSION["cart"]))
    {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["cart"]);
            $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        }
        else
        {
            echo '<script>alert("Products already added to cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    }
    else
    {
        $item_array = array(
        'product_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'product_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["cart"] as $keys => $values)
        {
            if($values["product_id"] == $_GET["id"])
            {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}*/
?>-->
<div style=" margin-right: auto; margin-left: auto; width:1000px">
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
            <td><div style="padding: 10px; padding-left: 15px;"><img src="<?php echo $values["item_image"]; ?>" height="100" width="150" ></div></td>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="cartf.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span    class="text-danger glyphicon glyphicon-remove-sign"></span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $values["product_price"]);
            $_SESSION["pay"] = $total;
            $_SESSION["p_name"] = $values["item_name"];
            $_SESSION["price"] = $values["product_price"];
            $_SESSION["qty"] = $values["item_quantity"];
        
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
</div>
<div>

    <a href="../../user/checkout.php" style="margin-left:1100px;" class="pull-right btn btn-primary" > Checkout </a>
</div>

<div style="height: 200px;">
    
</div>





  <?php  include('../../footer.php')    ?>

</body>
</html>