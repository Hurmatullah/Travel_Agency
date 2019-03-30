<?php


session_start();
$r= $_SESSION['password'];
$e= $_SESSION['name'];

if(isset($r,$e)){
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
	$id=$_GET['id'];

	$delete="DELETE FROM costumers_booking_form where customer_id='$id'";
	$show=mysql_query($delete,$conn);
	if($show){

		header('location:bookingissues.php?delete=true');
		}

		else
		
	header('location:bookingissues.php?delete=false');
}

 ?>




