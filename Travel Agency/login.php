<?php   
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('travel_agency');

if(isset($_POST["username"], $_POST["password"])) 
    {     

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysql_query("SELECT username, password FROM admin WHERE username = '".$name."' AND  password = '".$password."'");
        	 if(mysql_num_rows($result1) > 0 )
        { 

        	if(isset($_POST['remember'])=="on"){
			setcookie('user',$name,time()+3600);
			setcookie('pass',$password,time()+3600);}
            $_SESSION["loggid_in"] = true; 
            $_SESSION["name"] = $name; 
            $_SESSION["password"] = $password; 
            header('Location:panel.php');
        }
        else
        {
        	$message= "Incorrect Username or Password!";
            echo "<script> window.onload = function(){alert('Incorrect Username or Password!');}</script>";
        }

}



mysql_close();





?>
<?php include('connection.php'); ?>






<!DOCTYPE html>
<html >
<head>
<title>LOGIN</title>
<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" /><style>
  form input .checkbox
  {

  	width: 40%;
  	height: 40%;
  	padding: 30%;
  	background-color: blue;
    }


</style>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  
  
  
      <link rel="stylesheet" href="css/stylee.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1 style="color: white;">Please enter your Username and Password!</h1>
		
		
		<form class="form" action="" method="post">
			<input type="text" placeholder="Username" name="username" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters"  value="<?php 
if(isset($_COOKIE['user'])){
	echo $_COOKIE['user'];}

?>" ><br>




			<input type="password" placeholder="Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" value="<?php 
if(isset($_COOKIE['pass'])){
	echo $_COOKIE['pass'];}

?>" ><br>
		
      <label style="color: white;"><input type="checkbox" style="width: 50%; height: 50px; font-size: 60px;" name="remember">Remember Me!</label> 
    <br><br>

   			

			<button type="submit" id="login-button" name="login">Login</button><br><br><br>
		

			  <a href="index.php" style=" -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  		outline: 0;
  		background-color: white;
 	 border: 0;
  	padding: 10px 15px;
  	color: #16263F;
  	border-radius: 3px;
  	width: 10px;
  	cursor: pointer;
  	font-size: 18px;
 	 -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
   			background-color: #f5f7f9;
   			text-decoration: none;

         ">Back to home</a><br>
			  







		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li><li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li><li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
