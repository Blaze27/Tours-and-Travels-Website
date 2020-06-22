<?php
include_once('config.php');

if(isset($_POST['signup-btn']))
{

	// $fname=$_POST['fname']; 
	// echo $fname;
	$username = $_POST['username'];
	
	// $email=$_POST['email']; 
	// $phno=$_POST['phno']; 	
	// $dob=$_POST['dob']; 		
	// $password=$_POST['password'];
	
	// $query1=mysqli_query($con,"insert into user_signup(name,username,email,dob,phno, password) values('$fname','$username','$email','$phno','$dob','$password')");

	// if($query1)
	// 	{ 
	// 		echo "<script>alert('Successfully Registered. You can login now');</script>"; 		
	// 	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="signup" class="input-group" method="post" onsubmit="return validation()">

				<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Name" class="input-field" id = "fname" name="fname" required>
				<span id="nameerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/user-solid.svg" style="width: 15px; height: 15px;"></i>
				<input type="text" placeholder="Username" name="username" class="input-field" id = "username" required>
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

</body>
</html>