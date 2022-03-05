<?php
session_start();
include("config.php");

$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$upd="UPDATE mycart SET quantity='$qty' WHERE cart_id='$cartid'";
$connection->query($upd);

?>
<div class="table-content table-responsive">
                    <table class="table table-bordered" id="crt_table">
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
                                                        <form id="frm<?php echo $row['cart_id']; ?>">
                                                            <input type="hidden" name="cart_id" value="<?php echo $row['cart_id'];;?>">
                                                            <input type="number" class="quantity-input" name="qty" value="<?php echo $row['quantity']; ?>" onchange="updcart(<?php echo $row['cart_id'];;  ?>)" onkeyup="updcart(<?php echo $row['cart_id'];;  ?>)" style="width: 100px;" max="5" min="1" size="2">
                                                        
                                                        </form>
                                                    </div>
                                    </td>
                                    <td class="item-total"><?php echo $row['quantity']*$row['price']; ?></td>
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