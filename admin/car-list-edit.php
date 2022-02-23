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
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Car's Data </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM car_list WHERE car_id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="car-list-code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['car_id'] ?>">

                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
                                    placeholder="Enter Cars name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>"
                                    class="form-control" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_price" value="<?php echo $row['price']; ?>"
                                    class="form-control" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label>Models</label>
                                <input type="text" name="edit_models" value="<?php echo $row['model'] ?>"
                                    class="form-control" placeholder="Enter Models">
                            </div>
                            <div class="form-group">
                                <label>Doors</label>
                                <input type="text" name="edit_doors" value="<?php echo $row['doors'] ?>"
                                    class="form-control" placeholder="Enter Doors">
                            </div>
                            <div class="form-group">
                                <label>Miles</label>
                                <input type="text" name="edit_miles" value="<?php echo $row['miles'] ?>"
                                    class="form-control" placeholder="Enter Miles">
                            </div>
                            <div class="form-group">
                                <label>Brand name</label>
                                <input type="text" name="edit_brand" value="<?php echo $row['brand_name'] ?>"
                                    class="form-control" placeholder="Enter Brand Name">
                            </div>
                            <div class="form-group">
                                  <label>Current Image</label><br>
                                  <img src="<?php echo '../img/car/'.$row['image'];  ?>" height="100px">
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                 <input type="file" name="fileToUpload" class="form-control">
                            </div>

                            <a href="car-list.php" class="btn btn-danger"> CANCEL </a>
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