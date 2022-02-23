<?php
include('includes/database/dbconfig.php');
  if(isset($_POST['re_password']))
  {
  $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $query="SELECT * FROM register where id='1'";
  $chg_pwd=mysqli_query($connection,$query);

  $chg_pwd1=mysqli_fetch_array($chg_pwd);
  $data_pwd=$chg_pwd1['password'];
  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
      $query="update register set password='$new_pass' where id='1'";
    $update_pwd=mysqli_query($connection,$query);
    echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
  }
  else{
    echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
  }

  }
  else
  {
  echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
  }}
?>
