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


$test=("SELECT * from flights");
$result=mysql_query($test,$conn);
$name=mysql_fetch_assoc($result);





?>

<!DOCTYPE html>
<html>
<head>

		<title>FLIGHTS DESCRIPTION</title>
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


	
</head>

<body  style="background-color: #f6f6f6;">

<?php echo "<html><head><link rel='stylesheet' href='css/bootstrap/css/bootstrap.min.css'>
<link rel='stylesheet' href='css/bootstrap/css/bootstrap.css'></head>

<body>
<div class='container'>
<div class='row'>
<div class='col-md-12'><center><h1 class='alert alert-success' style='margin-top:2%'>Welcome To Flight Information Page</h1></center>
</div>
</div></div>


<div class='container'>
<div class='row'>
<div class='col-md-11'><input style='width:100%;height:40px;' type='search' name='search' placeholder='Search...'></input></div>

<div class='col-md-1'><input style='width:100%;height:40px;' type='image' class='alert alert-success' name='searchh' src='icon/search.png'></input></div>
</div>
</div></div>






<div class='container'>
<br><br>
<div class='row'>

<table class='table table-hover'><tr><th>ID:</th><th>Flight From To:</th><th>Passenger Capacity:</th><th>Departure Time:<th>Arrival Time:</th><th>Airline name:</th>
<th>Delete:</th><th>Edit:</th><th>Add:</th>

</tr>";
do{
	
	echo "<tr class='success'>";
	echo "<td class='success'>".$name['flight_id']."</td>";
	echo "<td>".$name['flight_name']."</td>";
	echo "<td>".$name['no_of_passengers']."</td>";
	echo "<td>".$name['departure_time']."</td>";
	echo "<td>".$name['arrival_time']."</td>";
	echo "<td>".$name['airline_name']."</td>";
	
	echo "<td>"."<a href='flight_delete.php?id=".$name['flight_id']."'><img  style='margin-left:30%;' src='icon/delete.png' width='16' height='16' />"."</a>"."</td>";
	
	echo "<td>"."<a href='flight_edit.php?id=".$name['flight_id']."'><img src='icon/edit.png'  style='margin-left:30%;' width='16' height='16' />"."</a>"."</td>";
	echo "<td>"."<a href='flight_add.php'><img src='icon/add.png' width='16' height='16' style='margin-left:30%;' />"."</a>"."</td>";
	
	
	
	
	
}while($name=mysql_fetch_assoc($result));
echo "</table></div></div></div></body></html>";





?>
	


</body>


</html>