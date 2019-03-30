<?php


session_start();

if(isset($_SESSION['password'],$_SESSION['name'])){
echo "";

}
else
header("location:login.php?notallowed");


?>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('travel_agency');


if(isset($_GET['id'])){
	$b=$_GET['id'];
	$test="select first_name,last_name,country,city,check_in,check_out,email_address,phone_number,hotel_name,children,adults,comfort_type,no_of_rooms from costumers_booking_form  where customer_id='$b'";
	$show=mysql_query($test,$conn);
	$na=mysql_fetch_assoc($show);
	}
if(isset($_POST['submit'])){
	
	
	

	
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$checkin=$_POST['check_in'];
	$checkout=$_POST['check_out'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$hotel=$_POST['hotel'];
	$children=$_POST['children'];
	$adult=$_POST['adults'];
	$comfort=$_POST['comfort'];
	$room=$_POST['room'];
	
	
	
	$int="update costumers_booking_form set first_name='$fname',last_name='$lname',country='$country',city='$city',check_in='$checkin',check_out='$checkout',email_address='$email',phone_number='$phone',hotel_name='$hotel',children='$children',adults='$adult',comfort_type='$comfort',no_of_rooms='$room' where customer_id='$b'";
	
	$show= mysql_query($int,$conn) or die(mysql_error());
	if($show){

		echo "<script>window.onload = function(){alert('You have been updated a Record Successfully!');}</script>";
		}

		else
		echo "<script>window.onload = function(){alert('Something went wrong please try again!');}</script>";
	
}

 ?>























<!DOCTYPE html>
<html>
<head>

		<title>EDIT BOOKING FORM</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="booking/css/booking.css">
	
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>

		
	
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
<style type="text/css">
	a{
		text-decoration: none;
	}
	a:hover{
		text-decoration: none;
	}
</style>

	
</head>

<body  style="background-color: #f6f6f6;">
<div class="container">
<div style="padding: 10%;"></div>
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-11">
		<table class="table table-condensed">
			<tr>
				<form action="" method="post">
				<th>First Name:</th>
				<td><input type="text" name="fname" placeholder="Firstname:"  value="<?php echo $na['first_name']; ?>"  required pattern="[a-zA-Z\s]{1,}" title="Firstname contains only letters"></input></td>
				<th>Last Name:</th>
				<td><input type="text" name="lname" placeholder="Lastname:"  value="<?php echo $na['last_name']; ?>"  required pattern="[a-zA-Z\s]{1,}" title="Lastname contains only letters"></input></td>
			</tr>
			<tr>
				
				
				<th>Country:</th>
				<td><input type="text" name="country" placeholder="Country:" required pattern="[a-zA-Z\s]{1,}"  value="<?php echo $na['country']; ?>"  title="Country contains only letters"></input></td>
				<th>City:</th>
				<td><input type="text" name="city"  value="<?php echo $na['city']; ?>"  placeholder="City:" required pattern="[a-zA-Z\s]{1,}" title="City contains only letters"></input></td>
			</tr>
			<tr>
				
				
				<th>Check In:</th>
				<td><input type="date" name="check_in" placeholder="Check In:" value="<?php echo $na['check_in']; ?>"   required p></input></td>
				<th>Check Out:</th>
				<td><input type="date" name="check_out"  value="<?php echo $na['check_out']; ?>"   required placeholder="Check Out:" ></input></td>
			</tr>
			
			<tr>
				
				
				<th>Email Address:</th>
				<td><input type="email" name="email" placeholder="name@example.com"  value="<?php echo $na['email_address']; ?>" required ></input></td>
				<th>Phone Number:</th>
				<td><input type="text" name="phone"   required placeholder="Phone Number" value="<?php echo $na['phone_number']; ?>"  required pattern="[0-9]{8,}" title="Phone Number contains only digits"></input></td>
			</tr>
			<tr>
				
				
				<th>Hotel Name:</th>
				<td><input type="text" name="hotel" placeholder="Hotel Name" value="<?php echo $na['hotel_name']; ?>"   required pattern="[a-zA-Z\s]{1,}" title="Hotel Name contains only letters" ></input></td>
				<th>Children:</th>
				<td><input type="text" name="children"   required placeholder="Chidlren" value="<?php echo $na['children']; ?>"  required pattern="[0-9]{0,}" title="Contains only digits"></input></td>
			</tr>

			<tr>
				
				
				<th>Adults:</th>
				<td><input type="text" name="adults"   required placeholder="Adults" value="<?php echo $na['adults']; ?>"  required pattern="[0-9]{0,}" title="Contains only digits"></td>
				<th>Comfort Type:</th>
				<td><input type="text" name="comfort"   required placeholder="Comfort Type : (CHEAP,STANDART,LUX)" value="<?php echo $na['comfort_type']; ?>"  required pattern="[a-z]{3,}" title="Contains only Letters"></td></td>
			</tr>

			<tr>
				
				
				<th>Rooms:</th>
				<td><input type="text" name="room"   required placeholder="Enter number of Rooms:" value="<?php echo $na['no_of_rooms']; ?>"  required pattern="[0-9]{0,}" title="Contains only digits"></td></td></tr>
			
			<tr>
				<td><input type="submit" name="submit" value="Save Changes" class="btn btn-success btn-lg btn-block"></input></td>
				
				<td><a href="our_team.php" class="btn btn-primary btn-lg btn-block">Back to Settings</a></input></td>
			</tr></form>
		</table></div>


		
	</div>
</div>

</body>
</html>