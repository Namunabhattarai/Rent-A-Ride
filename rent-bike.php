<?php 
session_start();

if(!$_SESSION['username'])
{
    header('Location:login.php');
}
include('includes/header.php');
include('includes/scripts.php');
include('includes/scripts-inventory.php');


?>
<?php 
include('config.php');
if(isset($_POST['submit']))
{
	$order_no='ord'.rand(100,500);
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$brand = $_POST['brand'];
	$address = $_POST['address'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	$paymentMethod = $_POST['paymentMethod'];




	$query1 = "INSERT INTO orders(order_no,name,email,phone,address,brand,price,date,paymentMethod) VALUES ('$order_no','$name','$email','$phone','$address','$brand','$price','$date','$paymentMethod')";
            $query_run1 = mysqli_query($connection, $query1);
			
			if($query_run1){
				$_SESSION['status'] = "Your Data is Updated";
				echo "<script>window.location.href='myaccount.php';</script>";
				exit;
			}else{
				mysqli_error($connection);
			}



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    <link rel="stylesheet" href="assets/css/style-rent.css">
</head>
<body>
<div id="banner"></div>
<div id="booking" class="section mt-5">
		<div class="section-center">
			<div class="container">
				<div class="row">
			
				 
					<div class="booking-form">
						<div class="form-header text-center text-secondary mb-4">
							<h1>RENT NOW</h1>
						</div>
					 	<?php 
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM bike_list where bike_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							
							?> 


						<form method="POST" action="">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" name="name" type="text"  placeholder="Enter your name" value="<?php echo $_SESSION['username'];?>" readonly >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter your email" autocomplete="off">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" >
							</div>
							<div class="form-group">
								<span class="form-label">Location</span>
								<input class="form-control" type="text" name="address" placeholder="Enter ZIP/Location" >
							</div>
							<div class="form-group">
								<span class="form-label">Brand Name</span>
								<input class="form-control" type="text" name="brand" placeholder="Enter brand name" value="<?php echo $row['name'];?>" readonly >
							</div>
							<div class="form-group">
								<span class="form-label">Total Price</span>
								<input class="form-control" type="text" name="price" placeholder="Total Price" value="<?php echo $row['price'];?>" readonly> 
							</div>
							<div class="form-group">
								<span class="form-label">Pickup Date</span>
								<input class="form-control" name="date" type="date" required>			
							</div>
							<div class="form-group">
									<span class="form-label">PAYMENT METHOD</span>
									<div class="d-block my-3">
									<select id="paymentMethod" name="paymentMethod" class="form-control">
										<option value="COD">Cash On Delivery</option>
										<option value="Esewa">Esewa</option>
										<option value="credit">Credit</option>
									</select>
									</div>

									
							</div>
							
							<div class="form-btn text-center mt-2">
								<button class="submit-btn btn" name="submit">Rent Now</button>
							</div>
						</form>
						<?php }}?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
  
</body>
</html>
<?php include('footer2.php');?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"663b2eda4c4ba74f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>