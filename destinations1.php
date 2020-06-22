<?php
session_start();
include_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Destinations</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/destinations.css">
</head>
<body>
	<header>
    <div class="cont">
      <a href="index.html"><img src="images/logo_large.png" alt="logo" class="logo"></a>
      <nav id="header-nav">
        <ul id="header-items">
          <li><a href="index.html">Home</a></li>
          <li><a href="destinations.html">Destinations</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
          <li><button type="button" name="logout" id="nav-button" onclick="window.location.href ='LoginForm.php';"><span>Log out</span></button></li>
        </ul>
      </nav>
    </div>
  </header>
  <br>
	<div class="main-container">
    <?php
    $destinations = $_SESSION['destinations'];
    $query1 = mysqli_query($con, "select * from name_of_place where place_name = '$destinations' limit 1");
    $row = mysqli_fetch_array($query1);
     ?>
     <span id="img-container-info1"><?php echo $row['place_name'] ?></span>
			<div class="img-container">
				<img src="<?php echo $row['url1'] ?>" alt="images" style="width: 700px; height: 350px;">
				
			</div>
			<div class="img-container">
				<img src="<?php echo $row['url2'] ?>" alt="images" style="width: 700px; height: 350px;">
				
			</div>
			<div class="img-container">
				<img src="<?php echo $row['url3'] ?>" alt="images" style="width: 700px; height: 350px;">
				
			</div>
      <br>
			<div class="form-group">
        <font size="4"> City Name: <?php echo $row['city'] ?> </font><br>
        <font size="4"> State Name: <?php echo $row['state'] ?> </font><br>
        <font size="4"> pincode: <?php echo $row['pincode'] ?> </font><br>
        <font size="4"> Nearest Hotel: <?php echo $row['nearest_hotel'] ?> </font><br>
        <font size="4"> Nearest Airport: <?php echo $row['nearest_airport'] ?> </font><br>
        <font size="4"> Nearest Railway: <?php echo $row['nearest_railway'] ?> </font><br>
        <font size="4"> Description: <?php echo $row['description'] ?> </font><br>

      </div>
	</div>
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <img src="images/logo_large.png">
          <p>Travel is the fatal to prejudice, bigotry and narrow mindedness, and many of our people need it sorely on these accounts.<br> ~ MARK TWAIN
          </p>
          <div class="contact">
            <span><i><img src="images/phone-solid.svg" style="width: 15px; height: 15px;"></i>&nbsp; 891-896-4804</span>
            <span><i><img src="images/envelope-solid.svg" style="width: 15px; height: 15px;"></i>&nbsp; contact@tours&travels.in</span>
          </div>
          <div class="social-icons">
            <a href="#"><img src="images/facebook-brands.svg" ></a>
            <a href="#"><img src="images/google-brands.svg" ></a>
            <a href="#"><img src="images/twitter-brands.svg" ></a>

          </div>
    </div>
    <div class="footer-section links">
      <h2>Quick Links</h2>
      <ul>
        <a href="#"><li>Home</li></a>
        <a href="destinations.html"><li>Destinations</li></a>
        <a href="AboutUs.html"><li>About Us</li></a>
      </ul>
    </div>
    <div class="footer-section contact-form">
      <h2>Contact Us</h2>
      <form action="index.html" method="post">
        <input type="email" placeholder="Your Email Address..." class="text-input contact-input">
        <textarea cols="30" rows="5" placeholder="Your Message..." class="text-input contact-input"></textarea>
        <br>
        <button type = "button" class="footer-submit-btn contact-btn" onclick="window.location.href ='index.html';">Submit</button>
      </form>
    </div>
</div>
<hr>
  <div class="footer-bottom">
    2020 &copy; Tours & Travels | Designed By Akshit, Umang, Rahul
  </div>
  

</div>
</body>
</html>