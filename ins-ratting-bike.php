<?php
session_start();
include("config.php");
if(isset($_POST['savert'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$ratting=$_POST['rating'];
	$review=$_POST['review'];
	$ii=$_POST['pid'];

	$ins="INSERT INTO ratting SET name='$name',email='$email',ratting='$ratting',review='$review',pid='$ii'";
	$connection->query($ins);

	?>
	<script >
		
		window.location='inventory-details-bikes.php?itemno=<?php echo $ii ?>';
	</script>

	<?php

}
?>