<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/html/carnation/carnation/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 22:23:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rent -A- Ride</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    <?php error_reporting(1);
  ?>
        

        <!-- header-area -->
        <header class="transparent-header">
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-md-6 d-none d-md-block">
                            <div class="header-top-action">
                                <ul>
                                    <li><i class="fas fa-car"></i>RENT-A-RIDE</li>
                                    <!-- <li><i class="far fa-clock"></i> 10:00 AM To 5:00 PM</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-right">
                                <ul>
                                    <li class="header-top-social">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li class="header-top-login">
                                      <?php 

                                        session_start();

                                        if($_SESSION['username']==''){

                                        echo"<a class='nav-link' href='login.php'>LOGIN/REGISTER</a>";
                                        }else{
                                        echo"<a class='nav-link' href='logout.php'>LOGOUT</a>";
                                        }

                                      ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.php" class="sticky-logo-none"><img src="assets/images/logoo.png" height="100px" width="200px" alt="Logo"></a>
                                        <a href="index.php" class="sticky-logo-active"><img src="assets/images/logoo.png" height="100px" width="200px" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active dropdown"><a href="index.php">HOME</a> </li>
                                                
                                            <li><a href="about.php">ABOUT</a></li>
                                            <li><a href="services.php">SERVICES</a></li>

                                            <li class="dropdown"><a href="#">RENT</a>
                                                <ul class="submenu">
                                                    <li><a href="car-listing.php">CAR RENTING</a></li>
                                                    <li><a href="bike-listing.php">BIKE RENTING</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.php">SHOP</a></li>
                                            <!-- <li class="dropdown"><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="loan-calculator.html">Loan Calculator</a></li>
                                                    <li><a href="login-register.html">Login Page</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="dropdown"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li><a href="author-profile.html">DEALERS</a></li> -->
                                            <li><a href="contact.php">CONTACT</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-shop-cart"><a href="cart.php"><i class="fas fa-shopping-basket"></i><span>
                                            <?php 
                                                
                                                session_start();
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT cart_id FROM mycart where buyer='$id' ORDER BY cart_id";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                            ?>
                                            
                                          
                                          </span></a>
                                                
                                            </li>
                                            <li class="header-btn"><a href="myaccount.php" class="btn">MY ACCOUNT</a></li>
                                            <li class="header-search"><a href="#" data-toggle="collapse" data-target="#collapse-search-body" aria-expanded="false" aria-controls="collapse-search-body"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.php"><img src="assets/images/logoo.jpg" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div id="collapse-search-body" class="collapse-search-body collapse">
                    <div class="search-body">
                        <div class="container custom-container">
                            <form action="#">
                                <div class="form-item">
                                    <input name="search" placeholder="Type here...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            