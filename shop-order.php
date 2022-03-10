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
	$today = date("Ymd");
	$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
	$order_no= $today . $rand;
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];
	$price = $_POST['price'];
    $size = $_POST['size'];
	$color = $_POST['color'];
    $quantity = $_POST['quantity'];
	$paymentMethod = $_POST['paymentMethod'];




	$query1 = "INSERT INTO shop_order(order_no,name,email,phone,address,p_name,p_price,p_size,p_color,quantity,payment) VALUES ('$order_no','$name','$email','$phone','$address','$product','$price','$size','$color','$quantity','$paymentMethod')";
	$query_run1 = mysqli_query($connection,$query1);
			
			if($query_run1){
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
							<h1>BUY NOW</h1>
						</div>
					 	<?php 
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM shop where shop_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?> 

						<form method="POST" action="" autocomplete="off">
							<div class="row">
							
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" name="name" type="text" value="<?php echo $_SESSION['username'];?>"  placeholder="Enter your name" readonly>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter your email" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" required>
							</div>
							<div class="form-group">
								<span class="form-label">Delivery Location</span>
								<input class="form-control" type="text" name="address" placeholder="Enter Delivery Location" required>
							</div>
							<div class="form-group">
								<span class="form-label">Product Name</span>
								<input class="form-control" type="text" name="product" placeholder="Enter Product name" value="<?php echo $row['p_name'];?>" readonly>
							</div>
							<div class="form-group">
								<span class="form-label">Unit Price</span>
								<input class="form-control" type="text" name="price" placeholder=" Price" value="<?php echo $row['p_price'];?>" readonly>
							</div>
                            <div class="form-group">
								<span class="form-label">Size</span>
								<input class="form-control" type="text" name="size" placeholder=" Price" value="<?php echo $row['p_size'];?>" readonly>
							</div>
                            <div class="form-group">
								<span class="form-label">Color</span>
								<input class="form-control" type="text" name="color" placeholder=" color" value="<?php echo $row['p_color'];?>" readonly>
							</div>
                            <div class="form-group">
								<span class="form-label">Quantity</span>
								<input class="form-control" type="text" name="quantity" placeholder=" Quantity">
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
								<button class="submit-btn btn" name="submit">Order Now</button>
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