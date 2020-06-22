<!-- <?php
#session_start();
#if(isset($_POST['logout']))
{
#  $_SESSION['username'] = "";
#  $_SESSION['destinations'] = "";
#  header("location : LoginForm.php");
}
?> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours & Travels</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <div class="container">
      <a href="index.html"><img src="images/logo_large.png" alt="logo" class="logo"></a>
      <nav id="header-nav">
        <ul id="header-items">
          <li><a href="#">Home</a></li>
          <li><a href="destinations.php">Destinations</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
          
          <li><button type="button" name="logout" id="nav-button" onclick="window.location.href ='LoginForm.php';"><span>Log out</span></button></li>
          
        </ul>
      </nav>
    </div>
  </header>
  <br>

<div class="main-cover">
  
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="images/image_show_4.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“Travel makes one modest. You see what a tiny place you occupy in the world.” <br>
  ― Gustave Flaubert</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_7.jpg" style="width:100%; height: 300px; ">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“See the world. Ask for no guarantees, ask for no security.” <br>
  ― Ray Bradbury, Fahrenheit 451</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_9.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“The journey is the destination.” <br>
  ― Dan Eldon</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_10.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“Le tourisme, se ramène fondamentalement au loisir d'aller voir ce qui est devenu banal.” <br>
  ― Guy Debord</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_3.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“In any case, a little danger is a small price to pay for ridding a place of tourists.” <br>
  ― Tahir Shah</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_5.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“One’s destination is never a place, but a new way of seeing things.”<br> – Henry Miller</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_2.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“We travel not to escape life, but for life not to escape us.”<br> – Unknown</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_8.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“I am not a great book, I am not a great artist, but I love art and I love food, so I am the perfect traveller.”<br> – Michael Palin</div>
    </div>

    <div class="mySlides fade">
      <img src="images/image_show_1.jpg" style="width:100%; height: 300px;">
      <div class="text" style="font-family: Snell Roundhand, cursive;">“I am not the same having seen the moon shine on the other side of the world.”<br> – Mary Anne Radmacher</div>
    </div>
  </div>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span> 
    </div>
    <!-- --------------------------point to start again--------------------------- -->
    

</div>


<hr>
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
        <a href="destinations.php"><li>Destinations</li></a>
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
  
  <script src="js/script.js"></script>
</body>
</html>
