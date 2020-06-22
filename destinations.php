<?php
session_start();
include_once('config.php');
if (isset($_POST['search']))
{
	$_SESSION['destinations'] = $_POST['place'];
	header("location: destinations1.php");
}
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
		<div>
			<form autocomplete="off" method="post">
  				<div class="autocomplete" style="width:300px;">
    				<input id="myInput" type="text" name="place" placeholder="Name of place..">
  				</div>
  				<button name="search" id="search" class="search">Search</button>
			</form>																	
		</div>
			<div class="img-container">
				<img src="https://www.skymetweather.com/content/wp-content/uploads/2019/05/img1-24.jpg" alt="images" style="width: 700px; height: 350px;">
				<!-- <span id="img-container-info1">name of the image</span> -->
			</div>
			<div class="img-container">
				<img src="https://www.indiamarks.com/wp-content/uploads/Ganesh-Chaturthi-Delicacies.jpg" alt="images" style="width: 700px; height: 350px;">
				<!-- <span id="img-container-info1">name of the image</span> -->
			</div>
			<div class="img-container">
				<img src="https://i.ytimg.com/vi/U_UboHR9vIg/hqdefault.jpg" alt="images" style="width: 700px; height: 350px;">
				<!-- <span id="img-container-info1">name of the image</span> -->
			</div>
			<div class="img-container">
				<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/8c/60/09/vighnahar-ganpati-temple.jpg" alt="images" style="width: 700px; height: 350px;">
				<!-- <span id="img-container-info1">name of the image</span> -->
			</div>
			<div class="img-container">
				<img src="https://guidetour.in/wp-content/uploads/2018/08/Mukurthi-national-park.jpg" alt="images" style="width: 700px; height: 350px;">
				<!-- <span id="img-container-info1">name of the image</span> -->
			</div>
			<!-- <div class="img-container">
				<img src="images/image_show_7.jpg" alt="images" style="width: 700px; height: 350px;">
				<span id="img-container-info1">name of the image</span>
			</div>
			<div class="img-container">
				<img src="images/image_show_8.jpg" alt="images" style="width: 700px; height: 350px;">
				<span id="img-container-info1">name of the image</span>
			</div>
			<div class="img-container">
				<img src="images/image_show_9.jpg" alt="images" style="width: 700px; height: 350px;">
				<span id="img-container-info1">name of the image</span>
			</div>
			<div class="img-container">
				<img src="images/image_show_10.jpg" alt="images" style="width: 700px; height: 350px;">
				<span id="img-container-info1">name of the image</span>
			</div> -->
	</div>
	<br>
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

<script type="text/javascript" src="js/destinations.js"></script>
<script type="text/javascript"> autocomplete(document.getElementById("myInput"), countries);</script>
</body>
</html>