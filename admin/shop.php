<?php
 session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/database/dbconfig.php');
// include('security.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Shop's Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="shop_code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label>Choose a Size</label>
                    <select id="size" name="size">
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="small">Small</option>
                    </select>
            </div>
            <div class="form-group">
                <label>Choose a Colors</label>
                    <select id="colors" name="color">
                        <option value="Dark">Dark</option>
                        <option value="Blue">Blue</option>
                        <option value="Red">Red</option>
                    </select>
            </div>
            
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fileToUpload" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="shop_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Shop's Data  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
  echo'<h2>'.$_SESSION['success'].'</h2>';
  unset($_SESSION['success']);

}

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  echo'<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
  unset($_SESSION['status']);

}

?>
    <div class="table-responsive">
    <?php
                $query = "SELECT * FROM shop";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Product Name </th>
            <th>Price </th>
            <th>Description</th>
            <th>Size</th>
            <th>Color</th>
            <th>Images</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
                    <?php
                            if(mysqli_num_rows($query_run) > 0)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
                            <tr>
                                <td><?php  echo $row['shop_id']; ?></td>
                                <td><?php  echo $row['p_name']; ?></td>
                                <td><?php  echo $row['p_price']; ?></td>
                                <td><?php  echo $row['p_description']; ?></td>
                                <td><?php  echo $row['p_size']; ?></td>
                                <td><?php  echo $row['p_color']; ?></td>
                                <td><img src="<?php echo '../img/shop/'.$row['p_image']; ?>" height="100px"></td>
                                <td>
                                    <form action="shop_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['shop_id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="shop_code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['shop_id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>