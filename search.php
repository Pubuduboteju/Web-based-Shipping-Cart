<?php
//include "login_system_2/db.php";
$connect = mysqli_connect("localhost", "root", "", "accounts");
$keyWord=$_POST["word"];
$key =  ucwords($keyWord); 
//echo $KeyWord;
$sql = "SELECT * FROM products where p_name='$key'";
$result = $connect->query($sql);
//$brand = $row["brand"];
        //$catgry = $row["catgry"];

//if ($result->num_rows > 0) {
    // output data of each row
   //while($row = $result->fetch_assoc()) {
        /*echo ("<img src=.$row[image]>"."<br>".
             "Registration Number :".$row["brand"]."<br>".
        	 "MFY :".$row["price"]."<br>".
        	 "Mileage :".$row["p_name"]."<br>".
        	 "Location :".$row["Location"]."<br>".
        	 "More :".$row["MoreDetails"]."<br>".
       		 "Price :".$row["Price"]. "<br>");
        echo"<hr>";*/
       if(mysqli_num_rows($result) > 0)
                        {//echo "string";
                          while($row = mysqli_fetch_array($result))
                            {



        $brand = $row["brand"];
        $catgry = $row["catgry"];
        $name=$row["p_name"];
        echo $brand;
        echo $catgry;
        

      echo '<script>window.location="html/Product/Products.php?id='.$catgry.'&bra='.$brand.'&name='.$name.' "</script>';

 }   
} else {
    echo "0 results";
}
$connect->close();
?>