
<?php
include_once('connection.php');

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
if(isset($_POST['submit'],$_POST['name'],$_POST['email'],$_POST['body'],$_POST['message'])){

$name=$_POST['name'];
$email= $_POST['email'];
$body= $_POST['body'];
$message = $_POST['message'];

$sql = "insert into customer_emails 
       (customer_email_id,fullname,email_address,subject,body)
       values('NULL','$name','$email','$body','$message')";
       $retval = mysql_query( $sql,$conn);
     if($retval )
{
  echo "header('Location:index-4.php?submit=yes');
";

}

else
header('Location:index-4.php?submit=no');

}












?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
		
		<script src="js/script.js"></script>
		
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->

		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="index-1.php">HOT TOURS</a></li>
							
								<li><a href="index-3.php">OUR SERVICES</a></li>
								<li><a href="index-4.php">CONTACT US</a></li>
								<li><a href="login.php">LOGIN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_5">
					<h3>CONTACT US</h3>
					<div class="map">
						<p><span class="blog">For more information contact us . </span></p>
						<div class="clear"></div>
						<figure class="">
							<img src="images/contactus.jpg">
						</figure>
						<address>
							<dl>
								
								<dd><span>Telephone:</span>0747475071</dd>
								<dd>E-mail: <a href="#" class="col1">hormatrasa123@gmail.com</a></dd>
								<dd>E-mail: <a href="#" class="col1">mehreenhushmand2016@gmail.com</a></dd>
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>GET IN TOUCH WITH US</h3>
					<form id="form" action="" method="post" onsubmit="alert('Your email has been sent successfully!');">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" name="name"placeholder="Fullname:" required />
							<span class="empty-message">This field is required.</span>
							<span class="error-message">This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="email" name="email" placeholder="Email:" required />
							<span class="empty-message">This field is required.</span>
							<span class="error-message">This is not a valid email.</span>
						</label>
						<label class="country">
							<input type="text" name="body" placeholder="Subject:" required/>
							<span class="empty-message">This field is required.</span>
							
						</label>
						<label class="message">
							<textarea placeholder="Message:"  name="message" required></textarea>
							<span class="empty-message">This field is required.</span>
							<span class="error-message">The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<div class="row">
								<div class="col-8"><input type="submit" class="btn btn-success" value="Submit" name="submit"></input></div>
								<div class="col-4"><input type="reset" class="btn btn-success" value="Clear"></input></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
				<a href="http://www.facebook.com"  target="_blank" class="fa fa-facebook"></a>
						<a href="http://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
						<a href="http://www.google-plus.com" class="fa fa-google-plus" target="_blank"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2017 | <a href="#">Privacy Policy</a> | Website Designed by Hurmatullah Karimi & Mehreen Najm
					</div>
				</div>
			</div>
		</footer></div>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</div></body>
</html>