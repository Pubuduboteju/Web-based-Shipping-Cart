<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "accounts");

if(isset($_POST["add"]))

{
	if(isset($_SESSION["cart"]))

	{   $qtyy= $_POST["hidden_qty"];
			$order_qty=$_POST["quantity"];
			$brand=$_POST["hidden_brand"];
			$catgry=$_POST["hidden_cat"];
			$pname = $_POST["hidden_name"];
		if($order_qty<$qtyy){

		$qtyy= $_POST["hidden_qty"];
			$order_qty=$_POST["quantity"];
			$setid=$_GET["id"];
			$newqty= $qtyy-$order_qty;
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_image' => $_POST["hidden_image"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			
			//$qtyy= $_POST["hidden_qty"];
			//$order_qty=$_POST["quantity"];
			//$setid=$_GET["id"];
			//$newqty= $qtyy-$order_qty;
			


			mysqli_query($connect,"UPDATE products SET qty='$newqty' WHERE id='$setid'");
			echo '<script>window.location="cart.php"</script>';
		
	    }else{
	    	   echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="cart.php"</script>'; 
	    }
	    
		}else
		{
			
			echo '<script>alert("Quantity exceeds the stock limit")</script>';
	    	echo '<script>window.location="Products.php?id='.$catgry.'&bra='.$brand.'&name='.$pname.'"</script>';
		}
	}
	else
	{
		$qtyy= $_POST["hidden_qty"];
			$order_qty=$_POST["quantity"];
			$brand=$_POST["hidden_brand"];
			$catgry=$_POST["hidden_cat"];
		if($order_qty<$qtyy){

        $qtyy= $_POST["hidden_qty"];
			$order_qty=$_POST["quantity"];
			$setid=$_GET["id"];
			$newqty= $qtyy-$order_qty;



		$item_array = array(
		'product_id' => $_GET["id"],
		'item_image' => $_POST["hidden_image"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
		mysqli_query($connect,"UPDATE products SET qty='$newqty' WHERE id='$setid' ");
   }else{
   	  echo '<script>alert("Quantity exceeds the stock limit")</script>';
	    	echo '<script>window.location="Products.php?id='.$catgry.'&bra='.$brand.'&name='.$pname.'"</script>';
   }


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
}
?>

<?php //session_destroy();  ?>