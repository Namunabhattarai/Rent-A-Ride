<?php 
include('includes/header.php');
include('includes/scripts.php');
 include('includes/scripts-inventory.php');
?>
  
  <!-- services -->

</head>



<?php 

error_reporting(1);
 session_start();
 include("config.php");
if(isset($_POST['service_save'])){
    $name=$_POST['name'];
    $phone=$_POST['phone_number'];
    $location=$_POST['location'];
    $service=$_POST['servic'];
    $message=$_POST['message'];


$result=mysqli_query($connection,"insert into services(name,phone,location,service,message) values('$name','$phone','$location','$service','$message')");
if($result)
{
    echo '<script>
    alert("Your appointment has been sent");
    window.location.href="index.php";
    </script>';
}
else
{
header("location:services.php");
}

}
?>
<body>





<div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Services</li>
      </ul>
    </div>
  </section>

  <section class="inner-about-area gray-lite-bg pt-120 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="inner-about-img mb-75">
                                <img src="img/images/about_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-10">
                            <div class="inner-about-content mb-60">
                                <div class="section-title mb-25">
                                    <span class="sub-title">About Our Company</span>
                                    <h2 class="title">OUR SERVICES<span>.</span></h2>
                                    <div class="line"><img src="img/images/title_line.png" alt=""></div>
                                </div>
                                <p>Lorem ipsum, or lipsum as it is sometimes known dummy text used in laying out print, graphic web
                                The passage is attributed</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="about-features-item">
                                <div class="icon">
                                      <i class="fas fa-cogs"></i>
                                </div>
                                <div class="content">
                                    <h5>Wheel Adjustment</h5>
                                    <p>We are always help to make one of the best adjustment service</p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="icon">
                                     <i class="fas fa-engine-warning"></i>
                                </div>
                                <div class="content">
                                    <h5>Engine Servicing</h5>
                                    <p>We are always help to make one of the best engine service</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="about-features-item">
                                <div class="icon">
                                    <i class="fas fa-tire-flat"></i>
                                </div>
                                <div class="content">
                                    <h5>Tyre Service</h5>
                                    <p>Placlder text commonly used detrated theyjlos visual form amet</p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="icon">
                                    <i class="far fa-car-wash"></i>
                                </div>
                                <div class="content">
                                    <h5>Washing Service</h5>
                                    <p>Placlder text commonly used detrated theyjlos visual form amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

  <!-- APPOINTMENT -->
<div class="appointment-area pt-100 pb-70 w3l-contact-2">
<div class="container py-lg-5 py-md-4 py-2">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="appointment-form">
<div class="section-title">
<h2>Book an Appointment</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>
</div>
<form class = 'card p-4 bg-dark' method="post" action="">
    <div class="row">
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Phone Number">
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="location" id="location" required data-error="Please enter your location" class="form-control" placeholder="Location">
    </div>

    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <select class="form-control" name="servic">
        <option value="">Select your services</option>
        <option value="car repair">Car repair</option>
        <option value="car wash">Car washes</option>
        <option value="car style">Car style</option>
        <option value="car working">Car working</option>
    </select>
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <div class="form-group">
    <textarea name="message" class="form-control" id="message" cols="20" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <input type="submit" name="service_save" value="Book Appointment" class="btn">

    </div>
    </div>
</form>
</div>
</div>
<div class="col-lg-5">
<div class="appointment-img">
<img src="img/images/best_services_img01.jpg" alt="Images">
</div>
</div>
</div>
</div>
</div>








<!-- Mirrored from templates.hibootstrap.com/ezir/default/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jun 2021 23:04:12 GMT -->
</html>
  <?php include('footer2.php');?>

    
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>