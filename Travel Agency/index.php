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

$fname=$_POST['first_name'];
$lname= $_POST['last_name'];
$country= $_POST['country'];
$city= $_POST['city'];
$comfort= $_POST['comfort'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$check_in= $_POST['check-in'];
$check_out= $_POST['check-out'];
$hotel= $_POST['hotel'];
$children= $_POST['children'];
$adults= $_POST['adults'];
$rooms= $_POST['rooms'];



$sql = "insert into costumers_booking_form 
       (customer_id,first_name,last_name,country,city,check_in,check_out,email_address,phone_number,hotel_name,children,adults,comfort_type,no_of_rooms)
       values('NULL','$fname','$lname','$country','$city','$check_in','$check_out','$email','$phone','$hotel','$children','$adults','$comfort','$rooms')";
       $retval = mysql_query( $sql,$conn);
     if($retval )
{
  header('Location:index.php?submit=yes');


}

else
header('Location:index.php?submit=no');

}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="booking/css/booking.css">
	
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
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
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
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
	<body class="page1" id="top">
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
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/i.jpg">
					<div class="caption fadeIn">
						<h2>HERAT</h2>
						<div class="price">
							FROM
							<span>600 AFG</span>
						</div>
						<a  href=""  data-toggle="modal" data-target="#herat">READ MORE</a>
					</div>
				</div>
				<div data-src="images/raees.jpg">
					<div class="caption fadeIn">
						<h2>KABUL</h2>
						<div class="price">
							FROM
							<span>500 AFG</span>
						</div>
						<a  href=""  data-toggle="modal" data-target="#kabul">READ MORE</a>
					</div>
				</div>
				<div data-src="images/k.jpg">
					<div class="caption fadeIn">
						<h2>BAMYAN</h2>
						<div class="price">
							FROM
							<span>800 AFG</span>
						</div>
						<a  href=""  data-toggle="modal" data-target="#bamyan">READ MORE</a>
					</div>
				</div>
				
				<div data-src="images/hurmat.jpg">
					<div class="caption fadeIn">
						<h2>KANDAHAR</h2>
						<div class="price">
							FROM
							<span>1200 AFG</span>
						</div>
						<a  href=""  data-toggle="modal" data-target="#k">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Creating Modals for home page =================================-->

<div class="modal fade" id="herat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3  style="text-align:center; color:red; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">HERAT</h3>
	   <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
        <img src="images/i.jpg"><hr>
		<p>Herat is one of the thirty-four provinces of Afghanistan, located in the western part of the country.
		Together with Badghis, Farah, and Ghor provinces, it makes up the south-western region of Afghanistan.
		Its primary city and administrative capital is Herat City. The province of Herat is divided into about 17 districts 
		and contains over 1,000 villages. It has a population of about 1,780,000, making it the second most populated province in
		Afghanistan behind Kabul Province.[2] The population is multi-ethnic but largely Persian-speaking.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- ------------------------------  second modal --------------- -->


<div class="modal fade" id="kabul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3  style="text-align:center; color:red; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">KABUL</h3>
	  <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
        <img src="images/kabul.jpg"><hr>
		<p>Kabul is the capital of Afghanistan as well as its largest city,
		located in the eastern section of the country. According to latest estimates,
		the population of the city is about 4.6 million, which includes all the major ethnic groups.
		Rapid urbanization had made Kabul the world's 64th largest city and the fifth fastest-growing city in the world.

</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- ------------------------------  third modal --------------- -->


<div class="modal fade" id="bamyan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3
	  style="text-align:center; color:red; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">BAMYAN</h3>
	  <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
        <img src="images/bamyan.jpg"><hr>
		<p>Bamyan is the capital of Bamyan Province in central Afghanistan.
		With an altitude of about 2,550 m and with a population of about
		61,863, Bamyan is the largest town in the central Afghan region of
		Hazaristan, and lies approximately 240 kilometres north-west of Kabul, 
		the national capital. Bamyan was the site of an early Hindu–Buddhist 
		monastery from which Bamyan takes its name (Sanskrit varmayana, "coloured"). </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<!-- ------------------------------  forth modal --------------- -->
<div class="modal fade" id="k" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3
	  style="text-align:center; color:red; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">KANDAHAR</h3>
	  <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
       <img src="images/kandahar.jpg"><hr>
		<p>Kandahar is one of the thirty-four provinces of Afghanistan, located in the southern part of the country next to Pakistan.
		It is surrounded by Helmand in the west, Uruzgan in the north and Zabul Province in the east. Its capital is the city
		of Kandahar, which is located on the Arghandab River.

The province contains about 18 districts, over 1,000 villages, and approximately 1,151,100 people, which is mostly tribal and a rural 
society. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<!-- ------------------------------  farah modal --------------- -->
<div class="modal fade" id="farah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3
	  style="text-align:center; color:#211463; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">FARAH</h3>
	  <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
       <img src="images/farah.jpg"><hr>
		<p>Farah is located in western Afghanistan, close to Herat and Iran, although 
		it lacks a direct road connection with the latter. Farah has a very clear grid
		of roads distributed through the higher density residential areas.
		However barren land (35%) and vacant plots (25%) are the largest land
		uses and combine for 60% of total land use</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<!-- ------------------------------  nangarhar modal --------------- -->
<div class="modal fade" id="nangarhar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3
	  style="text-align:center; color:#211463; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">NANGARHAR</h3>
	  <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
       <img src="images/nan.jpg"><hr>
		<p>Nangarhar is one of the 34 provinces of Afghanistan,
		located in the eastern part of the country.
		It is divided into twenty-two districts and
		has a population of about 1,436,000.The city of Jalalabad is the capital of Nangarhar province.
		The Jalalabad plain is one of the principal 
		agricultural areas of Afghanistan. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- ------------------------------  kunduz modal --------------- -->
<div class="modal fade" id="kunduz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        
        
      
      <div class="modal-body">
	  <h3
	  style="text-align:center; color:#211463; padding:10%; font-size:70px; font-family:tahoma;" class="modal-title">KUNDUZ</h3>
	   <h4  style="text-align:center; color:orange; padding:1%; font-size:20px;" class="modal-title"><a href="index.php#book">BOOK NOW!</h4></a>
     
       <img src="images/kunduz.jpg"><hr>
		<p>is a city in northern Afghanistan, which serves as the capital of Kunduz Province. It is sometimes
		spelled as Kundûz, Qonduz, Qondûz, Konduz, Kondûz, Kondoz, or Qhunduz. The city of Kunduz has a population o
		f about 268,893 making it about the 6th-largest city of Afghanistan, while Kunduz District has a population of 304,600.

</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- ---------------------- Content --------------------- -->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/farah.jpg" alt="">
						<div class="label">
							<div class="title">FARAH </div>
							<div class="price">FROM<span>450 AFG</span></div>
							<a  href=""  data-toggle="modal" data-target="#farah">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/nan.jpg" alt="">
						<div class="label">
							<div class="title">NANGARHAR</div>
						
							<div class="price">FROM<span>780 AFG</span></div>
							<a  href=""  data-toggle="modal" data-target="#nangarhar">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/kunduz.jpg" alt="">
						<div class="label">
							<div class="title">KUNDUZ</div>
							<div class="price">FROM<span>1200 AFG</span></div>
							<a  href=""  data-toggle="modal" data-target="#kunduz">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="row" id="book">
				<div class="grid_12">
					<h3>Booking Form</h3>
					<form id="bookingForm" action="" method="post" onsubmit="alert('Thank you for your booking!');">
						<div class="fl1">
							<div class="tmInput">
								<input name="first_name" placeHolder="Firstname:" type="text" pattern="[a-zA-Z]{1,}" title="Firstname only contains letters" required>
							</div>
								<div class="tmInput">
								<input name="last_name"  placeHolder="Lastname:" type="text"  pattern="[a-zA-Z]{1,}" title="Lastname only contains letters" required>
							</div>
							<div class="fl1">
							<div class="tmInput">
								<input name="country" placeHolder="Country:" type="text" pattern="[a-zA-Z]{1,}" title="Country only contains letters"  required>
							</div>
							<div class="tmInput">
								<input name="city" placeHolder="City:" type="text" pattern="[a-zA-Z]{1,}" title="City only contains letters"  required>
							</div>
						</div></div>
						<div class="fl1">
							<div class="tmInput">
								<input type="email" name="email" placeHolder="Email:" type="text" required>
							</div>
							<div class="tmInput">
								<input type="text" name="phone" placeHolder="Phone:" pattern="[0-9]{10,}" title="Phone number only contains digits "required>
							</div>
							<div class="tmInput mr0">
								<input name="hotel" placeHolder="Hotel:" type="text" required>
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="date" name="check-in" placeHolder='dd/mm/yyyy' required>
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="date" name="check-out" placeHolder='dd/mm/yyyy' required>
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="comfort" type="radio" value="cheap" id="tmRadio0" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="comfort" type="radio" value="standart" id="tmRadio1" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="comfort" type="radio"  value="lux" id="tmRadio2" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="" required>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
						<div class="clear"></div>
						
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" > Book </button>
					</form><br><br><hr>
			
				
				<div class="row">
				<div class="col-12">
				<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9PKN1ITDKgU" frameborder="0" gesture="mediaallowfullscreen"></iframe>
				</div>

		
					
					</div></div>
					<div class="clear cl1"></div>
					<div class="row">
				 
				  <div class="col-12">
				  <div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Oc6s1fVzt4k" frameborder="0" gesture="media allowfullscreen"></iframe>
				</div>
					
					</div>
					
				</div></div></div></div></div>
				
				
				
			</div>
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
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>

