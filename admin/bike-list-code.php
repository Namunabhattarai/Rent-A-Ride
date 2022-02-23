<?php
include('security.php');

if(isset($_POST['bike_save']))
{
    $name = $_POST['name'];
    $description=$_POST['description'];
    $price = $_POST['price'];
    $model = $_POST['model'];
    $seats = $_POST['seats'];
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
      move_uploaded_file($file_tmp,"../img/bike/".$file_name);
   
        
            echo "images uploaded:";
        }else{
            echo "Sorry only jpg,jpeg,png and gif allowed:";
        }
        
        
        
        }
        }

     $query = "INSERT INTO bike_list (name,description,price,model,seat,miles,brand_name,image) VALUES ('$name','$description','$price','$model','$seats','$miles','$file_name',$brand_name)";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Bike's data  Added";
                $_SESSION['status_code'] = "success";
                header('Location: bike-list.php');
            }
            else 
            {
                $_SESSION['status'] = "Bike's data  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: bike-list.php');  
            }       

}





//code to update the button

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $edit_name= $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];
    $edit_price= $_POST['edit_price'];
    $edit_models= $_POST['edit_models'];
    $edit_seats= $_POST['edit_seats'];
    $edit_miles= $_POST['edit_miles'];
    $edit_brand= $_POST['edit_brand'];

    $query = "SELECT * FROM bike_list";
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
        move_uploaded_file($file_tmp,"../img/bike/".$file_name);



            echo "images uploaded:";
        }else
        {
            echo "Sorry only jpg,jpeg and gif allowed:";
        }

    }else{
        
        $file_name=$current_image;
    }
}

    $query1 = "UPDATE bike_list
     SET  name='$edit_name',description='$edit_description',price='$edit_price',model='$edit_models',seat='$edit_seats',miles='$edit_miles',image='$file_name',brand_name='$edit_brand' WHERE bike_id='$id' ";
    $query_run1 = mysqli_query($connection, $query1);

    if($query_run1)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: bike-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: bike-list.php'); 
    }
}



//code to delete the admin 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM bike_list WHERE bike_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: bike-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: bike-list.php'); 
    }    
}
  
?>
