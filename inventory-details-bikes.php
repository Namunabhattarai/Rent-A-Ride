<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
<style>
input[type="text"]{
  font-size:27px;
}
.tt{
    font-size:20px;
}
<style>
/* input[type="text"]{
  font-size:27px;
} */
.tt{
    font-size:20px;
}

 input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}
.rtn{
  float: left;
  width: 100%;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}

.checked{
  color: orange;
}


 </style>
</style>
<body>
<?php
include('config.php');

if(isset($_POST['csubmit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $feedback = $_POST['feedback'];
    
     $query = "INSERT INTO feedback (name,email,date,feedback) VALUES ('$name','$email','$date','$feedback')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                header('Location:inventory-details-cars.php');
            }
            else 
            {
               mysqli_error($connection);
            }       

}



if(isset($_POST['bsubmit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $feedback = $_POST['feedback'];
    
   

     $query = "INSERT INTO feedback (name,email,date,feedback) VALUES ('$name','$email','$date','$feedback')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                header('Location:inventory-details-bikes.php');
            }
            else 
            {
               mysqli_error($connection);
            }       

}

?>
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
								$query = "SELECT * FROM bike_list where bike_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2><?php echo $row['name'];?></h2>
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
								$query = "SELECT * FROM bike_list where bike_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                        <div class="col-lg-12">
                            <div class="inv-details-slide-item">
                                <img src="<?php echo 'img/bike/'.$row['image'];?>" width="100%" height="700px" alt="">
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
								$query = "SELECT * FROM bike_list where bike_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?>
                            <div class="col-md-12 col-sm-12">
                                <div class="inv-details-meta">
                                <div class="inv-content-top">
                                              <ul>
                                              <li class="option">
                                                  <a href="rent-car.php?itemno=<?php echo $row['bike_id']; ?>">Rent Now</a>
                                                  <a class="new" href="cart.php">Add To Cart</a>
                                              </li>
                                              <li class="price"><?php echo $row['price'];?><span>/mo</span></li>
                                              </ul>
                                            </div>
                                        </div>
                                    <div class="location">
                                        <p class="tt"><i class="flaticon-placeholder"></i> Butwal,Rupandehi,Nepal</p>
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
                                    <h5>Inventory Features</h5>
                                </div>
                                <div class="row">
                                    <?php 
                                        include('config.php');
                                        $ii=$_GET['itemno'];
                                        $query = "SELECT * FROM bike_list where bike_id=$ii";
                                        $query_run = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($query_run) > 0)        
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {

							        ?>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="inventory-features-item">
                                            <h6>Body Type :</h6>
                                            <span>Coupe</span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>Make :</h6>
                                            <span><?php echo $row['name'];?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="inventory-features-item">
                                            <h6>Transmission :</h6>
                                            <span>Automatic</span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>Year :</h6>
                                            <span><?php echo $row['model'];?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="inventory-features-item">
                                            <h6>Condition :</h6>
                                            <span>New</span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>Fuel Type :</h6>
                                            <span>Petrol</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="inventory-features-item">
                                            <h6>Drive Type :</h6>
                                            <span>Front Wheel Drive</span>
                                        </div>
                                        <div class="inventory-features-item">
                                            <h6>Seats :</h6>
                                            <span><?php echo $row['seat'];?></span>
                                        </div>
                                    </div>
                                    <div class="inventory-details-description mb-30">
                                        <div class="inv-details-title">
                                            <h5>Description</h5>
                                        </div>
                                         <p class="tt"><?php echo $row['description'];?></p>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
                            
                             
                          <?php include('feedback-bike.php');?>

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
