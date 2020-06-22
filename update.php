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

	$d = $_SESSION['search-d'];
	$query1 = mysqli_query($con, "update name_of_place set place_name = '$name', city = '$city', state = '$state', pincode = '$pincode', url1 = '$img1',url2 = '$img2', url3 = '$img3', nearest_hotel = '$hotel',nearest_airport = '$airport', nearest_railway = '$railway', description = '$desc' where place_name = '$d'");

	if($query1)
	{
		echo "<script> alert('Updated successfully');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/destinations.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/admin.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/update.css"> -->
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
		<div class="form-box1" id="form-box">
			
			<form id="insert" class="input-group1" method="post">
				<?php
				$dest = $_SESSION['search-d'];
				$query = mysqli_query($con, "select * from name_of_place where place_name = '$dest'");
				$row = mysqli_fetch_array($query);
				 ?>
				<i class="fas fa-user" aria-hidden="true"><img src="images/location-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px;"></i>
				<input type="text" placeholder="Name of Place.." class="input-field" id = "name" name="name" value="<?php echo $dest ?>" required>
				<span id="nameerror" class="text-danger font-weight-bold"></span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/city-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="city" placeholder="City.." class="input-field" id = "city" value="<?php echo $row['city'] ?>"required>
				<span id="cityerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/satellite-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="state" placeholder="State.." class="input-field" id = "state" value="<?php echo $row['state'] ?>"required>
				<span id="stateerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/map-pin-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="pincode" placeholder="PinCode.." class="input-field" id = "pincode" value="<?php echo $row['pincode'] ?>" required>
				<span id="pincodeerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name= "img1" placeholder="Image URL 1.." class="input-field" id = "img1" value="<?php echo $row['url1'] ?>" required>
				
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="img2" placeholder="Image URL 2.." class="input-field" id = "img2" value="<?php echo $row['url2'] ?>" required>
				
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/images-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="img3" placeholder="Image URL 3.." class="input-field" id = "img3" value="<?php echo $row['url3'] ?>" required><br>

				<i class="fas fa-user" aria-hidden="true"><img src="images/hotel-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="hotel-distance" placeholder="Nearest Hotel.." class="input-field" id = "hotel-distance" value="<?php echo $row['nearest_hotel'] ?>" required>
				<span id="hotel-distanceerror" class="text-danger font-weight-bold"> </span>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/plane-departure-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="airport" placeholder="Nearest Airport.." class="input-field" id = "airport" value="<?php echo $row['nearest_airport'] ?>" required>
				<br>
				<i class="fas fa-user" aria-hidden="true"><img src="images/subway-solid.svg" style="width: 15px; height: 15px; margin-bottom: 0px"></i>
				<input type="text" name="railway-station" placeholder="Nearest Railway Station.." class="input-field" id = "railway-station" value="<?php echo $row['nearest_railway'] ?>" required>
				<br>
				<br>

				<textarea type="text" cols="43" rows="5" placeholder="Description..." class="text-input contact-input" name="desc" id="desc"><?php echo $row['description'] ?></textarea>
				<br>
				<button type="submit" name="update" class="submit-btn" id="update">Update</button>
			</form>
		</div>
	</div>
<!-- <script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript" src="js/destinations.js"></script>
<script>
autocomplete(document.getElementById("myInput"), countries);
</script> -->
<script type="text/javascript" src="js/update.js"></script>
</body>
</html>