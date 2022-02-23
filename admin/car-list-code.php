<?php
include('security.php');

if(isset($_POST['car_save']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $model = $_POST['model'];
    $doors = $_POST['doors'];
    $miles = $_POST['miles'];
    $brand_name = $_POST['brand_name'];
   

    //images added
    if(isset($_FILES['fileToUpload']))
        {
        
        $file_name=$_FILES['fileToUpload']['name']; 
        $file_type=$_FILES['fileToUpload']['type'];
        $file_tmp=$_FILES['fileToUpload']['tmp_name'];
        $file_size=$_FILES['fileToUpload']['size'];
        
        
        if(!empty($file_name))
        {
        
        $file_actual = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 
        
        
        // valid image extensions
        $valid_extensions = array('jpeg','jpg','gif','png'); 
        
        
        if(in_array($file_actual, $valid_extensions))
        {
      move_uploaded_file($file_tmp,"../img/car/".$file_name);
   
        
            echo "images uploaded:";
        }else{
            echo "Sorry only jpg,jpeg,png and gif allowed:";
        }
        
        
        
        }
        }

     $query = "INSERT INTO car_list (name,description,price,model,doors,miles,image,brand_name) VALUES ('$name','$description','$price','$model','$doors','$miles','$file_name','$brand_name')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Car's data  Added";
                $_SESSION['status_code'] = "success";
                header('Location: car-list.php');
            }
            else 
            {
                $_SESSION['status'] = "Courses  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: car-list.php');  
            }       

}





//code to update the button

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $edit_name= $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];
    $edit_price = $_POST['edit_price'];
    $edit_models= $_POST['edit_models'];
    $edit_doors= $_POST['edit_doors'];
    $edit_miles= $_POST['edit_miles'];
    $edit_brand= $_POST['edit_brand'];

    $query = "SELECT * FROM car_list";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)        
        {
             while($row = mysqli_fetch_assoc($query_run))
         {
             $current_image=$row['image'];
         }}

    //Image Uploading
if(isset($_FILES['fileToUpload']))
{

$file_name=$_FILES['fileToUpload']['name']; 
$file_type=$_FILES['fileToUpload']['type'];
$file_tmp=$_FILES['fileToUpload']['tmp_name'];
$file_size=$_FILES['fileToUpload']['size'];


    if(!empty($file_name))
    {

        $file_actual = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 


        // valid image extensions
        $valid_extensions = array('jpeg','jpg','gif','png'); 


        if(in_array($file_actual, $valid_extensions))
        {
        move_uploaded_file($file_tmp,"../img/car/".$file_name);



            echo "images uploaded:";
        }else
        {
            echo "Sorry only jpg,jpeg and gif allowed:";
        }

    }else{
        
        $file_name=$current_image;
    }
}

    $query1 = "UPDATE car_list
     SET  name='$edit_name',description='$edit_description',price='$edit_price',model='$edit_models',doors='$edit_doors',miles='$edit_miles',image='$file_name',brand_name='$edit_brand' WHERE car_id='$id' ";
    $query_run1 = mysqli_query($connection, $query1);

    if($query_run1)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: car-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: car-list.php'); 
    }
}



//code to delete the admin 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM car_list WHERE car_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: car-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: car-list.php'); 
    }    
}
  
?>
