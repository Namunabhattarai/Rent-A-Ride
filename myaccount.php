
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
<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.5.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> -->
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


    <!-- <link rel="stylesheet" href="assets/css/style2.css"> -->
    <link rel="stylesheet" href="assets/css/myaccount.css">


<body>
<div id="banner"></div>
            <div class="container mt-5">
                <div class="row">
                 
                    <div class="col-lg-12">
                    
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        <a href="#rents" data-toggle="tab" class=""><i class="fa fa-money"></i> Rents</a>
                                        <a href="#orders" data-toggle="tab" class=""><i class="fa fa-money"></i> Orders</a>
                                        <a href="#mycart" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Mycart</a>
                                        
                                        <a href="#address-edit" data-toggle="tab" class=""><i class="fa fa-map-marker"></i> address</a>
                                        <a href="#account-info" data-toggle="tab" class=""><i class="fa fa-user"></i> Account Details</a>
                                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade active show" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content text-center">
                                                <h3>DASHBOARD</h3>
                                                <div class="welcome">
                                                    <p>Hello, <strong><?php echo $_SESSION['username'];?></strong> (If Not <strong><?php echo $_SESSION['username'];?> !</strong><a href="logout.php" class="logout"> Logout</a>)</p>
                                                </div>

                                                <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="rents" role="tabpanel">
                                            <div class="myaccount-content text-center">
                                                <h3>RENT BIKE/CAR</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <?php
                                                        
                                                        include('config.php');
                                                        $id=$_SESSION['username'];
                                                        $query = "SELECT * FROM orders where name='$id'";
                                                        $query_run = mysqli_query($connection, $query);
                                                    ?>
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                            <th>OrderNo</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>Brand </th>
                                                            <th>Price </th>
                                                            <th>OrderDate </th>
                                                            <th>Payment</th>
                                                        
                                                            <th>DELETE </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if(mysqli_num_rows($query_run) > 0)        
                                                                {
                                                                    while($row = mysqli_fetch_assoc($query_run))
                                                                    {
                                                            ?>
                                                                    <tr>
                                                                    <td><?php echo $row['order_no'];?></td>
                                                                    <td><?php echo $row['name'];?></td>
                                                                    <td><?php echo $row['email'];?>.</td>
                                                                   
                                                                    <td><?php echo $row['address'];?></td>
                                                                    <td><?php echo $row['brand'];?></td>
                                                                    <td><?php echo $row['price'];?></td>
                                                                    <td><?php echo $row['date'];?></td>
                                                                    <td><?php echo $row['paymentMethod'];?></td>
                                                                        
                                                                        <td>
                                                                            <form action="myorders-code.php" method="post">
                                                                                <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                            
                                                                                <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
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
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content text-center">
                                                <h3>MY ORDERS</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <?php
                                                        
                                                        include('config.php');
                                                        $id=$_SESSION['username'];
                                                        $query = "SELECT * FROM orders where name='$id'";
                                                        $query_run = mysqli_query($connection, $query);
                                                    ?>
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                            <th>OrderNo</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>Brand </th>
                                                            <th>Price </th>
                                                            <th>OrderDate </th>
                                                            <th>Payment</th>
                                                        
                                                            <th>DELETE </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if(mysqli_num_rows($query_run) > 0)        
                                                                {
                                                                    while($row = mysqli_fetch_assoc($query_run))
                                                                    {
                                                            ?>
                                                                    <tr>
                                                                    <td><?php echo $row['order_no'];?></td>
                                                                    <td><?php echo $row['name'];?></td>
                                                                    <td><?php echo $row['email'];?>.</td>
                                                                   
                                                                    <td><?php echo $row['address'];?></td>
                                                                    <td><?php echo $row['brand'];?></td>
                                                                    <td><?php echo $row['price'];?></td>
                                                                    <td><?php echo $row['date'];?></td>
                                                                    <td><?php echo $row['paymentMethod'];?></td>
                                                                        
                                                                        <td>
                                                                            <form action="myorders-code.php" method="post">
                                                                                <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                            
                                                                                <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
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
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="mycart" role="tabpanel">
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
                                                                    <td> <a href="rent.php?itemno=<?php echo $row['cart_id']; ?>"><button class="btn btn-success">Buy Now</button></a>   </td>
                                                                    
                                                                    
                                                                        <td>
                                                                            <form action="myorders-code.php" method="post">
                                                                                <input type="hidden" name="delete_id" value="<?php echo $row['cart_id']; ?>">
                                                                                <button type="submit" name="delete_cart_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> DELETE</button>
                                                                            </form>
                                                                        </td>
                                    
                                                                    
                                                                    
                                                                        
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
                                        <!-- Single Tab Content End -->
                                       
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content text-center">
                                                <h3>BILLING ADDRESS</h3>
                                                <address>
                                                    <p><strong><?php echo $_SESSION['username'];?></strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                         San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">First Name</label>
                                                                    <input type="text" id="first-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Last Name</label>
                                                                    <input type="text" id="last-name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Display Name</label>
                                                            <input type="text" id="display-name">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Addres</label>
                                                            <input type="email" id="email">
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New Password</label>
                                                                        <input type="password" id="new-pwd">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                        <input type="password" id="confirm-pwd">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
                          
         <!-- footer-area -->
         <br><br><br><br><br><br><br>
        <footer class="footer-bg" data-background="img/bg/footer_bg.jpg">
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>Copyright © 2021. All rights reserved. by Rental</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="scroll-top scroll-to-target" onclick="topFunction()" id="myBtn" data-target="html">
                                <i class="fas fa-angle-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
                                                   

   
</body>
</html>

     


