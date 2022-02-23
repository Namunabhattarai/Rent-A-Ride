<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
<style>
/* input[type="text"]{
  font-size:27px;
} */
.tt{
    font-size:20px;
}
</style>
<body>



<div class="inner-banner">
</div>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg inventory-details-breadcrumb" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                             <?php 
                             include('config.php');
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM shop where shop_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2><?php echo $row['p_name'];?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Simple Listing – List Single</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <?php }} ?> 
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- inventory-details-slide -->
            <div class="inventory-details-slide">
                <div class="container-fluid p-0 fix">
                    <div class="row no-gutters inv-details-active">
                             <?php 
                             include('config.php');
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM shop where shop_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                        <div class="col-lg-12">
                            <div class="inv-details-slide-item">
                                <img src="<?php echo 'img/shop/'.$row['p_image'];?>" width="90%" height="700px" alt="">
                            </div>
                        </div>
                        
                        <?php }} ?>
                    </div>
                </div>
                <div class="inv-details-meta-wrap">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php 
                             include('config.php');
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM shop where shop_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                            <div class="col-md-12 col-sm-12">
                                <div class="inv-details-meta">
                                <div class="inv-content-top">
                                <p class="tt"><?php echo $row['p_description'];?></p>
                                              <ul>  
                                                <li class="option">
                                                    <a href="rent-car.php?itemno=<?php echo $row['car_id']; ?>">Buy Now</a>
                                                    <a class="new" href="cart.php?itemno=<?php echo $row['shop_id']; ?>">Add To Cart</a>
                                                </li>
                                                <li class="price"><span>Rs.</span><?php echo $row['p_price'];?></li>
                                              </ul>
                                            </div>
                                        </div>
                                    <div class="location">
                                        <p class="tt"><i class="flaticon-placeholder"></i>Butwal,rupandehi,Nepal</p>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inventory-details-slide-end -->

            <!-- inventory-list-area -->
            <section class="inventory-details-area gray-lite-bg pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="inventory-features mb-30">
                                <div class="inv-details-title">
                                    <h5>Product Features</h5>
                                </div>
                                <div class="row">
                                    <?php 
                                        include('config.php');
                                        $ii=$_GET['itemno'];
                                        $query = "SELECT * FROM shop where shop_id=$ii";
                                        $query_run = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($query_run) > 0)        
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {

							        ?>
                                    <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                            <h6>Product Name :</h6>
                                            <span><?php echo $row['p_name'];?></span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>Size :</h6>
                                            <span><?php echo $row['p_size'];?></span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>color :</h6>
                                            <span><?php echo $row['p_color'];?></span>
                                        </div>
                                    </div>
                                    <div class="inventory-details-description mb-30">
                                        <div class="inv-details-title">
                                            <h5>Description</h5>
                                        </div>
                                         <p class="tt"><?php echo $row['p_description'];?></p>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
                            
                           

                    </div>
                </div>
            </section>
            <!-- inventory-list-area-end -->

           
        </main>
        <!-- main-area-end -->



        <!-- footer-area -->
        <?php include('footer2.php');?>
        <!-- footer-area-end -->





    </body>

<!-- Mirrored from themebeyond.com/html/carnation/carnation/inventory-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 22:21:29 GMT -->
</html>
