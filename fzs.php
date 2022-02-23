
<style>
    .section-title{
        color:white;
        background-color:#4e63d7;
        border-radius:10px;
        padding:15px;
    }
    h3{
        font-size:1.5em;
        color:white;
    }
    #search{
    border:2px solid orange;
    font-size:20px;
    text-align:center;
    border-radius:100px;
  }
   
    </style>

    
    <body>
    <?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
  <!--/inner-page-->

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> bike-listing</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
      <!-- <link rel="stylesheet" href="assets/css/style-page.css"> -->
            <section class="inventory-list-area gray-lite-bg pt-100 pb-30">
                <div class="container">
                    <div class="inventory-meta-wrap mb-50">
                            <div class="section-title title-left text-center text-lg-left m-3">
                                <h3 class="top-sep text-center text-white">SELECT YOUR FAVOURITE BIKE</h3>
                            </div>
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-7 col-md-6">
                                <div class="inventory-top-meta">
                                    
                                    <ul>
                                        <li class="find">Total Bike Find : 
                                            <span>
                                                <?php 
                                                include('config.php');
                                                $query = "SELECT bike_id FROM bike_list WHERE brand_name='fzs'";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                                ?>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                            <form class="form-inline" method="post" action="search.php">
                                  <div class="input-group">
                                    <input type="text" class="form-control" id="search" name="search" size="50" placeholder="SEARCH FOR YOUR FAVOURITE BIKES" required>  
                                  </div>
                             </form><br>
                    <div class="row justify-content-center">

                        <div class="col-xl-8 col-lg-7 col-md-9">
                            <?php
                            include('config.php');
                            $query = "SELECT * FROM bike_list WHERE brand_name='fzs'";
                            $query_run = mysqli_query($connection, $query);
                            if(mysqli_num_rows($query_run) > 0)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $i=$row['bike_id'];
                            ?>
                            <div class="inventory-list-item">
                                <div class="inventory-list-thumb">
                                    <img src="<?php echo 'img/bike/'.$row['image'];?>" alt="">
                                </div>
                                <div class="inventory-list-content">
                                    <div class="inv-content-top">
                                        <ul>
                                            <li class="option">
                                                <a href="rent-bike.php?itemno=<?php echo $row['bike_id']; ?>">Rent Now</a>
                                            </li>
                                            <li class="price"><span><?php echo $row['price'];?>/mo</span></li>
                                        </ul>
                                    </div>
                                  
                                    <h4><a href="inventory-details-bikes.php?itemno=<?php echo $row['bike_id']; ?>"><?php echo $row['name'];?></a></h4>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>Butwal, Rupandehi, Nepal</p>
                                    <div class="inv-item-meta">
                                        <ul>
                                            <li class="call"><a href="contact.php"><i class="fas fa-phone-alt"></i>Contact</a></li>
                                            <li>Model : <?php echo $row['model'];?></li>
                                            <li>Seat : <?php echo $row['seat'];?></li>
                                            <li><?php echo $row['miles'];?></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <?php }} ;?>
                           
                        </div>
                      
                        <div class="col-xl-4 col-lg-5 col-md-9">
                            <aside class="inventory-sidebar">
                                <?php 
                                    include('bike-list-items.php');
                                ?>

                            </aside>
                        </div>

                    </div>
                </div>
            </section>
            <!-- inventory-list-area-end -->

            




            <?php include('footer2.php');?>
    </body>

<!-- Mirrored from themebeyond.com/php/carnation/carnation/inventory-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 22:24:08 GMT -->
</php>
