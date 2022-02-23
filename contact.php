
<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');
?>
  <!--/inner-page-->

  <?php 

error_reporting(1);
 session_start();
 include("config.php");
if(isset($_POST['contact_save'])){
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $phone=$_POST['contact_phone'];
    $message=$_POST['contact_message'];


$result=mysqli_query($connection,"insert into contact(contact_name,contact_email,contact_phone,contact_message) values('$name','$email','$phone','$message')");
if($result)
{
    echo '<script>
    alert("Your message has been sent");
    window.location.href="index.php";
    </script>';
}
else
{
header("location:contact.php");
}

}



?>
  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- /contact-section -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Contact Us</h6>
        <h3 class="title-w3l mt-2">Send a Message</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <img src="assets/images/2.jpg" class="img-fluid radius-image" alt="">
        </div>
        <div class="contact-right">
          <form action="" method="post" class = 'card p-4 bg-dark'>
            <div class="input-grids">

              <input type="text"  name="contact_name" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="contact_email" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="contact_phone" id="w3lWebsite" placeholder="Phone*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="contact_message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
            <input type="submit" name="contact_save" value="Send" class="btn">
            </div>
          </form>
        </div>
      </div>
      <div class="map-iframe mt-5 mb-lg-5 pb-lg-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.211349684329!2d83.46571351438469!3d27.71076003195026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399686f71446a4b1%3A0x712e7c86b3c8d75!2sButwal%20Multiple%20Campus!5e0!3m2!1sen!2snp!4v1624498290266!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <!-- //contact-section -->
  <?php include('footer2.php');?>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>