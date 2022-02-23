

<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
<style>
input[type="text"]{
  font-size:27px;
}
</style>
<body>
<div class="inner-banner">
  </div>
 <!-- latest-cars-area -->
 <section class="latest-cars-area pt-40 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title text-center mb-35">
                                <h2 class="overlay-title">All Seller</h2>
                                <span class="sub-title">SHOP LAYOUT</span>
                                <h2 class="title">latest Items</h2>
                            </div>
                            <!-- <div class="latest-car-menu-wrap">
                                <div class="latest-car-menu-active">
                                    <button class="active" data-filter="*">all SELLER</button>
                                    <button class="" data-filter=".cat-one">NEW CARS</button>
                                    <button class="" data-filter=".cat-two">USED CARS</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="latest-cars-wrapper">
                        <div class="row latest-car-items-active">
                            <?php
                                include('config.php');
                                $query = "SELECT * FROM shop ";
                                $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0)        
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        $i=$row['shop_id'];
                            ?>
                            <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                                <div class="latest-car-item mb-60">
                                    <div class="latest-car-thumb mb-25">
                                        <a href="shop_details.php?itemno=<?php echo $row['shop_id']; ?>">
                                            <img src="<?php echo 'img/shop/'.$row['p_image'];?>" height="200px" width="200px" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-car-content">
                                        <div class="latest-car-content-top">
                                            <h5><a href="shop_details.php?itemno=<?php echo $row['shop_id']; ?>"><?php echo $row['p_name'];?></a></h5>
                                         
                                        </div>
                                        <p>Size : <span><?php echo $row['p_size'];?></span></p>
                                        <p>Color : <span><?php echo $row['p_color'];?></span></p>
                                        <div class="latest-car-meta">
                                        <div class="inv-content-top">
                                              <ul>
                                              <li class="option">
                                                  <a href="shop-order.php?itemno=<?php echo $row['shop_id']; ?>">Buy Now</a>
                                                  <a class="new" href="mycart-shop.php?itemno=<?php echo $row['shop_id']; ?>">Add To Cart</a>
                                              </li>
                                              <li class="price"><span>RS.</span><?php echo $row['p_price'];?></li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                            <!-- for car -->

                        





                    </div>
                    
                </div>
            </section>
            <!-- latest-cars-area-end -->

<?php include('footer2.php');?>
</body>

</html>