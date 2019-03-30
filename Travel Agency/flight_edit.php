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
	$test="select flight_name,no_of_passengers,departure_time,arrival_time,airline_name from flights where flight_id='$b'";
	$show=mysql_query($test,$conn);
	$na=mysql_fetch_assoc($show);}

if(isset($_POST['submit'])){
	
	
	

	
	
	$name=$_POST['fname'];
	$p=$_POST['no_of_p'];
	$d=$_POST['d_time'];
	$at=$_POST['a_time'];
	$a=$_POST['airline_name'];
	
	
	$int="update flights set flight_name='$name',no_of_passengers='$p',departure_time='$d',arrival_time='$at',airline_name='$a' where flight_id='$b'";
	
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

		<title>FLIGHT EIDT</title>
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
				<th>Filght From To:</th>
				<td><input type="text" name="fname" placeholder="Enter your Distination" required pattern="[a-zA-Z\s]{1,}" value="<?php echo $na['flight_name']; ?>" ></input></td>
				<th>Passengers Capacity:</th>
				<td><input type="text" name="no_of_p" placeholder="Enter Passengers Capacity"  value="<?php echo $na['no_of_passengers']; ?>"  required pattern="[0-9]{1,}" title="Passengers Capacity contains only letters"></input></td>
			</tr>
			<tr>
				
				<th>Departure Time:</th>
				<td><input type="date" name="d_time" placeholder="Departure Time"  value="<?php echo $na['departure_time']; ?>"  required></input></td>
				<th>Arrival Time:</th>
				<td><input type="date" name="a_time" placeholder="Arrival Time" value="<?php echo $na['arrival_time']; ?>"  required ></input></td>
			</tr>
			<tr>
				
				<th>Airline Name:</th>
				<td><input type="text" name="airline_name" placeholder="Enter the Airline name"   value="<?php echo $na['airline_name']; ?>"  required  pattern="[a-zA-Z\s]{1,}" title="Must contain only letters" ></input></td>
				
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save Changes" class="btn btn-success btn-lg btn-block"></input></td>
				
				<td><a href="flight.php" class="btn btn-primary btn-lg btn-block">Back to Settings</a></input></td>
			</tr></form>
		</table></div>


		
	</div>
</div>

</body>
</html>