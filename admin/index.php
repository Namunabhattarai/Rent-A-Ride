
<?php
 include('security.php');
include('includes/header.php');
include('includes/database/dbconfig.php');
include('includes/navbar.php');
?>
        
   <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

  <!--Total Registered Admin Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered People</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">

            <?php 
                $query = "SELECT user_id FROM users ORDER BY user_id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total Admin: '.$row.'</h4>';
             ?>
            </div>
          </div>
          <!-- <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Total Registered Courses Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Registered Cars</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php 
                $query = "SELECT car_id FROM car_list ORDER BY car_id";  
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total cars: '.$row.'</h4>';
             ?>
            
            </div>
          </div>
          <!-- <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Total Registered Testimonial card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Registered Bikes</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h4 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php 
                        $query = "SELECT bike_id FROM bike_list ORDER BY bike_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total Bikes: '.$row.'</h4>';
                     ?>
                
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  

<!-- Content Row -->



        </div>
        <!-- container fliud -->

        </div>   
        <!-- end of main content -->

        


   
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>