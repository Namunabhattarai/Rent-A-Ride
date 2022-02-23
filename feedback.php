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
