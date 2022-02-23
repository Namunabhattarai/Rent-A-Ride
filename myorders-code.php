<?php
include('config.php');
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM orders WHERE order_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location:myaccount.php'); 
    }
}

if(isset($_POST['delete_cart_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM mycart WHERE cart_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location:cart.php'); 
    }
}




  ?>