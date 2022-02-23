<?php
session_start();
$id=$_SESSION['username'];
include("config.php");
$itemno=$_REQUEST['itemno'];

if(!$_SESSION['username']=='')
{

        $query = "SELECT * FROM shop where shop_id=$itemno";
        $query_run = mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run) > 0)        
        {
        
            while($row = mysqli_fetch_assoc($query_run))
                {
                    $product_name=$row['p_name'];
                    $buyer=$_SESSION['username'];
                    $image=$row['p_image'];
                    $price=$row['p_price'];
                    $size=$row['p_size'];
                    $color=$row['p_color'];
                    $qty=1;

        if(mysqli_query($connection,"insert into mycart(product_name,buyer,image,price,size,color,quantity) values('$product_name','$buyer','$image','$price','$size','$color','$qty')"))
            {
            header("location:cart.php");
            }
        else
        {
        header("location:index.php");
        }

         }       }
}else{
    header("location:login.php");
}
	
?>