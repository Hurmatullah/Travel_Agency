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



if(isset($_POST['submit'])){
	
	
	

	
	
	$name=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	
	$int="insert into admin(user_id,first_name,last_name,email_address,phone_number,username,password)
	values('NULL','$name','$lastname','$email','$phone','$username','$password')";
	
	
	
	
	$show= mysql_query($int,$conn) or die(mysql_error());
	if($show){

		echo "<script>window.onload = function(){alert('You have been added a Record Successfully!');}</script>";
		
		}

		else
		echo "<script>window.onload = function(){alert('Something went wrong please try again!');}</script>";
	
}











?>

<!DOCTYPE html>
<html>
<head>

		<title>ADMIN ADDING</title>
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
				<th>Firstname:</th>
				<td><input type="text" name="fname" placeholder="Enter your Firstname" required pattern="[a-zA-Z]{1,}" title="Firstname contains only letters"></input></td>
				<th>Lastname:</th>
				<td><input type="text" name="lname" placeholder="Enter your Lastname" required pattern="[a-zA-Z]{1,}" title="Lastname contains only letters"></input></td>
			</tr>
			<tr>
				
				<th>Email Address:</th>
				<td><input type="email" name="email" placeholder="name@example.com" required></input></td>
				<th>Phone number:</th>
				<td><input type="text" name="phone" placeholder="Enter your Phone number" required pattern="[0-9]{8,}" title="Phone number contains only digits"></input></td>
			</tr>
			<tr>
				
				<th>Username:</th>
				<td><input type="text" name="username" placeholder="Enter your Username"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" ></input></td>
				<th>Password:</th>
				<td><input type="text" name="password" placeholder="Enter your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" ></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add Record" class="btn btn-success btn-lg btn-block"></input></td>
				<td><input type="reset"  value="Clear" class="btn btn-info btn-lg btn-block"></input></td>
				<td><a href="admin.php" class="btn btn-primary btn-lg btn-block">Back to Settings</a></input></td>
			</tr></form>
		</table></div>


		
	</div>
</div>

</body>
</html>