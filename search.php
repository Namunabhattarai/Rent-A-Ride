<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
 <div class="inner-banner">
  </div>
<section class="latest-cars-area pt-40 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title text-center mb-35">
                                <h2 class="title">Your Searched Result</h2>
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
                                $search=$_POST['search'];
                                $query = "SELECT * FROM car_list where name LIKE '%{$search}%'";
                                $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0)        
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        $i=$row['car_id'];
                            ?>
                            <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                                <div class="latest-car-item mb-60">
                                    <div class="latest-car-thumb mb-25">
                                        <a href="inventory-details-cars.php?itemno=<?php echo $row['car_id']; ?>">
                                            <img src="<?php echo 'img/car/'.$row['image'];?>" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-car-content">
                                        <div class="latest-car-content-top">
                                            <h5><a href="inventory-details-cars.php?itemno=<?php echo $row['car_id']; ?>"><?php echo $row['name'];?></a></h5>
                                         
                                        </div>
                                        <p>Build Year : <span><?php echo $row['model'];?></span></p>
                                        <div class="latest-car-meta">
                                        <div class="inv-content-top">
                                              <ul>
                                              <li class="option">
                                                  <a href="rent-car.php?itemno=<?php echo $row['car_id']; ?>">Rent Now</a>
                                                  <a class="new" href="mycart-car.php?itemno=<?php echo $row['car_id']; ?>">Add To Cart</a>
                                              </li>
                                              <li class="price"><?php echo $row['price'];?><span>/mo</span></li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                            <!-- for car -->
                            <div class="row latest-car-items-active">
                            <?php
                                include('config.php');
                                $search=$_POST['search'];
                                $query = "SELECT * FROM bike_list where name LIKE '%{$search}%'";
                                $query_run = mysqli_query($connection, $query);
                                if(mysqli_num_rows($query_run) > 0)        
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        $i=$row['bike_id'];
                            ?>
                            <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                                <div class="latest-car-item mb-60">
                                    <div class="latest-car-thumb mb-25">
                                        <a href="inventory-details-bikes.php?itemno=<?php echo $row['bike_id']; ?>">
                                            <img src="<?php echo 'img/bike/'.$row['image'];?>" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-car-content">
                                        <div class="latest-car-content-top">
                                            <h5><a href="inventory-details-bikes.php?itemno=<?php echo $row['bike_id']; ?>"><?php echo $row['name'];?></a></h5>
                                         
                                        </div>
                                        <p>Build Year : <span><?php echo $row['model'];?></span></p>
                                        <div class="latest-car-meta">
                                        <div class="inv-content-top">
                                              <ul>
                                              <li class="option">
                                                  <a href="rent-bike.php?itemno=<?php echo $row['bike_id']; ?>">Rent Now</a>
                                                  <a class="new" href="mycart-bike.php?itemno=<?php echo $row['bike_id']; ?>">Add To Cart</a>
                                              </li>
                                              <li class="price"><?php echo $row['price'];?><span>/mo</span></li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>

                    </div>
                </div>
            </section>
            <!-- latest-cars-area-end -->
    <?php include('footer2.php');?>