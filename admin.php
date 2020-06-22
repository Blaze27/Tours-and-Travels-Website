<?php
session_start();
include_once('config.php');

if(isset($_POST['update']))
{
	$name = $_POST['name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];
	$hotel = $_POST['hotel-distance'];
	$airport = $_POST['airport'];
	$railway = $_POST['railway-station'];
	$desc = $_POST['desc'];

	$query1 = mysqli_query($con, "insert into name_of_place(place_name, city, state, pincode, url1, url2, url3, nearest_hotel, nearest_airport, nearest_railway, description) values('$name','$city','$state','$pincode','$img1','$img2', '$img3', '$hotel', '$airport','railway','desc')");

	if($query1)
	{
		echo "<script> alert('Successfully inserted the values.');</script>";
	}


}
if (isset($_POST['search-btn'])) {
	$_SESSION['search-d'] = $_POST['place'];
	header("location: update.php");
}
// if(isset($_POST['search-btn']))
// {

// 	$_SESSION['search-d'] = $_POST['place'];
// 	header("location : update.php");

// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/destinations.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<header>
    <div class="container-1">
      <a href="index.html"><img src="images/logo_large.png" alt="logo" class="logo"></a>
      <nav id="header-nav">
        <ul id="header-items">
          <li><a href="#">Home</a></li>
          <li><a href="destinations.html">Destinations</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
          <li><button type="button" name="logout" id="nav-button" onclick="window.location.href ='LoginForm.php';"><span>Log out</span></button></li>
        </ul>
      </nav>
    </div>
  </header>
  <br>
	<div class="container">
		<div class="form-box" id="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="search()">Search</button>
				<button type="button" class="toggle-btn" onclick="insert()">Insert</button>
			</div>
			<form id="search" name="search" class="input-group" method="post"> 

				<div class="autocomplete" style="width:300px;">
    				<input id="myInput" type="text" class="input-field" name="place" placeholder="Search.." required>
  				</div>

				
				<button name="search-btn" class="submit-btn" id="search-btn">Search</button>

			</form>
			<form id="insert" class="input-group" method="post">

				<i class="fas fa-user" aria-hidden="true"><img src="images/location-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px;"></i>
				<input type="text" placeholder="Name of Place.." class="input-field" id = "name" name="name" required>
				<span id="nameerror" class="text-danger font-weight-bold"></span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/city-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="city" placeholder="City.." class="input-field" id = "city" required>
				<span id="cityerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/satellite-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="state" placeholder="State.." class="input-field" id = "state" required>
				<span id="stateerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/map-pin-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="pincode" placeholder="PinCode.." class="input-field" id = "pincode" required>
				<span id="pincodeerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name= "img1" placeholder="Image URL 1.." class="input-field" id = "img1" required>
				
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="img2" placeholder="Image URL 2.." class="input-field" id = "img2" required>
				
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="img3" placeholder="Image URL 3.." class="input-field" id = "img3" required><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/hotel-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="hotel-distance" placeholder="Nearest Hotel.." class="input-field" id = "hotel-distance" required>
				<span id="hotel-distanceerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/plane-departure-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="airport" placeholder="Nearest Airport.." class="input-field" id = "airport" required>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/subway-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="railway-station" placeholder="Nearest Railway Station.." class="input-field" id = "railway-station" required>
				<br>
				<br>

				<textarea cols="43" rows="5" placeholder="Description..." class="text-input contact-input" name="desc" id="desc"></textarea>
				<br>
				<button type="submit" name="update" class="submit-btn" id="update">Insert</button>
			</form>
		</div>
	</div>

<script type="text/javascript" src="js/destinations.js"></script>
<script type="text/javascript" src="js/loginscript.js"></script>
<!-- <script type="text/javascript" src="js/admin.js"></script> -->
<script>
autocomplete(document.getElementById("myInput"), countries);
</script>
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>