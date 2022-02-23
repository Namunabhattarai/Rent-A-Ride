<?php
     include('security.php');
     include('includes/header.php'); 
    include('includes/navbar.php'); 
     include('includes/database/dbconfig.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Bike's Data </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM bike_list WHERE  bike_id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="bike-list-code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['bike_id'] ?>">

                            <div class="form-group">
                                <label>Bike Name</label>
                                <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
                                    placeholder="Enter Bikes name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>"
                                    class="form-control" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_price" value="<?php echo $row['price'];?>"
                                    class="form-control" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label>Models</label>
                                <input type="text" name="edit_models" value="<?php echo $row['model'] ?>"
                                    class="form-control" placeholder="Enter Models">
                            </div>
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="text" name="edit_seats" value="<?php echo $row['seat'] ?>"
                                    class="form-control" placeholder="Enter Seats">
                            </div>
                            <div class="form-group">
                                <label>Miles</label>
                                <input type="text" name="edit_miles" value="<?php echo $row['miles'] ?>"
                                    class="form-control" placeholder="Enter Miles">
                            </div>
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="edit_brand" value="<?php echo $row['brand_name'] ?>"
                                    class="form-control" placeholder="Enter Brand Name">
                            </div>
                            <div class="form-group">
                                  <label>Current Image</label><br>
                                  <img src="<?php echo '../img/bike/'.$row['image'];  ?>" height="100px">
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                 <input type="file" name="fileToUpload" class="form-control">
                            </div>

                            <a href="bike-list.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>