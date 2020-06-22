<?php
session_start();
include_once('config.php');

if(isset($_POST['signup-btn']))
{
	$fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];
	$dob = $_POST['dob'];
	$password = $_POST['password'];

	$query1 = mysqli_query($con, "insert into user_signup(name, username, email, dob, phno, password) values('$fname','$username','$email','$dob','$phno','$password')");

	if($query1)
	{
		echo "<script> alert('Successfully Registered');</script>";
	}
}
if(isset($_POST['login-btn']))
{
	$username = $_POST['loginusername'];
	$password = $_POST['loginpassword'];
	$query2 = mysqli_query($con, "select * from user_signup where username = '$username' and password = '$password'");
	$num = mysqli_fetch_array($query2);
	if($num > 0) {
		$_SESSION['username'] = $num['username'];
		header("location: home.php");
	}
	else {
		echo "<script> alert('invalid username or password');</script>";
	}

}

if(isset($_POST['admin-login']))
{
	$username = $_POST['loginusername'];
	$password = $_POST['loginpassword'];
	$query2 = mysqli_query($con, "select * from admin_login where username = '$username' and password = '$password'");
	$num = mysqli_fetch_array($query2);
	if($num > 0) {
		$_SESSION['username'] = $num['username'];
		header("location: admin.php");
	}
	else {
		echo "<script> alert('invalid username or password');</script>";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">

</head>
<body>
	<header>
    <div class="cont">
      <a href="index.html"><img src="images/logo_large.png" alt="logo" class="logo"></a>
      <nav id="header-nav">
        <ul id="header-items">
          <li><a href="#">Home</a></li>
          <!-- <li><a href="destinations.php">Destinations</a></li> -->
          <li><a href="AboutUs.html">About Us</a></li>
          <li><button type="button" id="nav-button" onclick="window.location.href = 'LoginForm.php';"><span>Log In</span></button></li>
        </ul>
      </nav>
    </div>
  </header>
  <br>
	<div class="container">
		<div class="form-box" id="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
			</div>
				<div class="social-icons" id="social-icons">
				<img src="images/google-brands.svg" alt="social-icons">
				<img src="images/facebook-brands.svg" alt="social-icons">
				<img src="images/twitter-brands.svg" alt="social-icons">
			</div>
			<form id="login" class="input-group" method="post">

				<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Username" class="input-field" id="loginusername"
				name="loginusername" required>

				<i class="fas fa-lock" aria-hidden="true"><img src="images/lock-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="Password" placeholder="Password" class="input-field" name="loginpassword" id="loginpassword" required>

				<input type="checkbox" class="checkbox" id="remember-me"><span>Remember Password?</span>
				<button type="submit" name="login-btn" class="submit-btn" id="login-btn">Log In</button>
				<span id="adminerror"></span>
				<button type="submit" id="admin-login" class="submit-btn" name="admin-login">Log In As Admin</button>
			</form>
			<form id="signup" class="input-group" method="post" onsubmit="return validation()">

				<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Name" class="input-field" id = "fname" name="fname" required>
				<span id="nameerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Username" name="username" class="input-field" required>
				<span id="usernameerror" class="text-danger font-weight-bold"> </span><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/envelope-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Email ID" name="email" class="input-field" id = "email" required>
				<span id="emailerror" class="text-danger font-weight-bold"> </span><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/birth-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Date of Birth" name="dob" class="input-field" id = "dob" required>
				<span id="doberror" class="text-danger font-weight-bold"> </span><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/phone-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Phone Number" name="phno" class="input-field" id = "phno" required>
				<span id="phnoerror" class="text-danger font-weight-bold"> </span><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/lock-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="Password" placeholder="Password" name="password" class="input-field" id = "password" required>
				<span id="passworderror" class="text-danger font-weight-bold"> </span><br>

				<input type="checkbox" class="checkbox"><span>I agree to the Terms and Conditions</span><br>
				<button type="submit" name="signup-btn" id="signup-btn" class="submit-btn">Sign Up</button>
			</form>
		</div>
	</div>



	<!--
	<div class="login-box">
		<h2 style="font-size: 1.7em;">Login</h2>
		<div class="textbox">
			<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
			<input type="text" placeholder="Username" name="" value="">
		</div>

		<div class="textbox">
			<i class="fas fa-lock" aria-hidden="true"><img src="images/lock-solid.svg" style="width: 15px; height: 15px;"></i>
			<input type="Password" placeholder="Password" name="" value="">
		</div>

		<input class="btn" type="button" name="" value="Sign In">
	</div>
-->
<script type="text/javascript" src="js/loginscript.js"></script>

</body>
</html>