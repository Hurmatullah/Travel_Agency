<?php


session_start();

if(isset($_SESSION['password'],$_SESSION['name'])){
echo "";

}
else
header("location:login.php?notallowed");


?>



<!DOCTYPE html>
<html>
<head>

		<title>SETTINGS</title>
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
<body>
<div class="container">
<br>
	<div class="row">
		<div class="col-12"><center><h1 class="alert alert-success">Welcome To Panel Setting Page</h1></center></div>
	</div></div>
<div class="container">
<br><br>
	<div class="row">
		<div class="col-md-4"><a href="admin.php" style="text-decoration: none;"><img src="images/unnamed (17).png"><h3 style="margin-left: 20%;">ADMIN</h3></a></div>
		<div class="col-md-4"><a href="bookingissues.php" style="text-decoration: none;"><img src="images/unnamed (18).png"><h3 style="margin-left: 7%;">BOOKING ISSUES</h3></a></div>
		<div class="col-md-4"><a href="flight.php" style="text-decoration: none;"><img src="images/aeroplane-icon-21.png"><h3 style="margin-left: 7%;">FLIGHT ISSUES</h3></a></div>
	</div>
</div>


<div class="container">
<br><br>
	<div class="row">
		<div class="col-md-4"><a href="airline.php" style="text-decoration: none;"><img src="images/fl.png"><h3 style="margin-left: 8%;">AIRLINE ISSUES</h3></a></div>
		<div class="col-md-4"><a href="customer_emails.php" style="text-decoration: none;"><img src="images/address-book-contact-icon.jpg"><h3 style="margin-left: 4%;">CUSTOMERS' EMAILS</h3></a></div>
		<div class="col-md-4"><a href="our_team.php" style="text-decoration: none;"><img src="images/team-2.png"><h3 style="margin-left: -5%;">TRAVEL AGENCIES INFO</h3></a></div>
	</div>
</div>


<div class="container">
<br><br>
	
	<div class="row">

		<div class="col-md-12">
		<form action="logout.php" method="post">

			<input type="submit" class="btn btn-success btn-lg btn-block" name="logout" value="LOGOUT"></input></form>
		</div>
	</div>


	<div class="row">

		<div class="col-md-12" style="margin-top: 20%;">
		
		</div>
	</div>

</div>



















<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>