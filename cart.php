<?php
 session_start();
 if(!$_SESSION['username'])
{
    header('Location:login.php');
}
 include('includes/header.php');
 include('includes/scripts.php');
  include('includes/scripts-inventory.php');

 
?>
<style>

#banner{
    background:url(img/background.jpg);
    width:100%;
    min-height:200px;
}
.btn{
    padding:10px;
    margin-top:15px;
    color:white;
}

</style>
<body>
<div id="banner"></div>
            <div class="myaccount-content text-center">
                <h3>MYCART</h3>
                <div class="myaccount-table table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Total Quantity</th>
                                <th>Buy now</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                        
                                <?php
                                    
                                    include('config.php');
                                    $id=$_SESSION['username'];
                                    $query = "SELECT * FROM mycart where buyer='$id'";
                                    $query_run = mysqli_query($connection, $query);
                                    if(mysqli_num_rows($query_run) > 0)        
                                    {
                                        while($row = mysqli_fetch_assoc($query_run))
                                        {
                                ?>
                                    <tr>
                                    
                                    <td><?php echo $row['cart_id'];?></td>
                                    <td><?php echo $row['product_name'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><?php echo $row['size'];?></td>
                                    <td><?php echo $row['color'];?></td>
                                    <td><img src="<?php echo 'img/shop/'.$row['image']?>" height="100px" alt=""></td>
                                    <td class="product-qty">
                                                    <div class="input-group-control">
                                                        <form id="frm<?php echo $row['cartid']; ?>">
                                                            <input type="hidden" name="cart_id" value="<?php echo $row['cartid'];;?>">
                                                            <input type="number" class="quantity-input" name="qty" value="<?php echo $row['quantity']; ?>" onchange="updcart(<?php echo $row['cartid'];;  ?>)" onkeyup="updcart(<?php echo $row['cartid'];;  ?>)" style="width: 100px;" max="5" min="1" size="2">
                                                        
                                                        </form>
                                                    </div>
                                    </td>
                                    <td class="item-total"><?php echo $row['qty']*$row['price']; ?></td>
                                    <td> <a href="rent.php?itemno=<?php echo $row['cart_id']; ?>"><button class="btn btn-success">Buy Now</button></a>   </td>
                                    
                                    
                                        <td>
                                            <form action="myorders-code.php" method="post">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['cart_id']; ?>">
                                                <button type="submit" name="delete_cart_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    } 
                                }
                                else {
                                    echo "No Record Found";
                                }
                                ?>
                
                                                                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>