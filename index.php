<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link type="text/css" rel="stylesheet" href="style.css"  /> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
</head>
<body class="body">
<div class="container">
  <div class="row">
  <div class="col-sm-12" >
  <h1><a href="home.php">Quiz World</a></h1>
  <p>Wel-Come to The World of Quiz</p>
</div></div>
<div class="row">
  <div class="col-sm-12" >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Quiz_World</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="aboutus">About_us</a></li>
      <li><a href="contectus">Contact_us</a></li>
      <li><a href="#howtoplay">How to Play</a></li>
      <li><a href="#login">Login</a></li>      
          </div>
</nav></div></div>
<!--slider
--><div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Slider/S3.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Slider/S2.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Slider/S1.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!--login-->
<h2 id="login"></h2>
  <form action="ulogin_sub.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
     

      <div class="col-sm-5">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
         <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Instagram
        </a>
         <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Linkdin
        </a>
         <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with xbox++
        </a>
      </div>
      
       <div class="col-sm-2">
       <span><h1 class="col-sm-2" style="margin-top: 70px;
    color: #00F;
    margin-left: 35px; color:#00F;">OR</h1></span>
       </div>

      <div class="col-sm-5">
       

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required> 
        <input type="submit" value="Login" >
        <a href="Userreg.php" style="color:white; background-color:#00F;" class="btn">Sign up</a>
         <a href="#" style="color:white; background-color:#00F;" class="btn">Forgot password?</a>
      </div>
      
      
    </div>
  </form>


<h2 align="center" id="contectus" style="color:#F00;">Contact Us</h2>  
  <div class="row">
  <div class="col-sm-3" >
  </div>
  <div class="col-sm-6" >
  <?php
  include('contect.php')
  ?>
  </div>

  
  </div>
 <div class="row">
  <div class="col-sm-12" >  
<?php
include('footer.php')
?></div></div>

<script type="text/javascript" src="script.js"></script>

</body>
</html>