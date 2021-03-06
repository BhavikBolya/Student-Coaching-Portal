<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet"  href="Templates/Homestyle.css">
</head>
<body>
<nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#"><img src="Templates/Images/logo.png"  width="147"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="/aboutus.html">About</a></li>
        <li><a href="/register.php">Register</a></li>
        <li id="log"><a href="/login.php">Login</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
<div class="bg">
</div>

<div class="about">
    <div class="content">
      <div class="title">Welcome to Valorant Coaching</div>
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="Templates/Images/banner1.png" style="width:100%">
          <div class="text">Infrastructure</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="Templates/Images/banner2.png" style="width:100%">
          <div class="text">Campus</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="Templates/Images/banner3.png" style="width:100%">
          <div class="text">Interior</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
    </div>
  </div>
<div class="information">
  <div id="Python">
    <p><h2>Python</h2></p>
    <hr>
    <br>
    <p>
      This Specialization builds on the success of the Python for Everybody course and will introduce fundamental programming concepts including data structures, networked application program interfaces, and databases, using the Python programming language. In the Capstone Project. You'll use the technologies learned throughout the Specialization to design and create your own applications for data retrieval, processing, and visualization.
    </p>
  </div>
  <div id="Java">
    <p><h2>Java</h2></p>
    <hr>
    <br>
    <p>
      Take your first step towards a career in software development with this introduction to Java-one of the most in-demand programming languages and the foundation of the Android operating system. Designed for beginners, this Specialization will teach you core programming concepts and equip you to write programs to solve complex problems. 
    </p>
  </div>
  <div id="R">
    <p><h2>R</h2></p>
    <hr>
    <br>
    
    <p>
      This Specialization covers foundational data science tools and techniques, including getting, cleaning, and exploring data, programming in R, and conducting reproducible research. Learners who complete this specialization will be prepared to take the Data Science: Statistics and Machine Learning specialization, in which they build a data product using real-world data.

    </p>
  </div>
</div>
<div>
    <button class="open-button" onclick="openForm()">Admin</button>

  <div class="form-popup" id="myForm">
    <form method="post" action="/checklogin.php" class="form-container">
      <h1 style="text-align: center;">Login</h1>

      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Name" name="username1" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" required>

      <input type="submit" name="submit" id="submit1" value="Login" class="btn">
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
</div>
<script type="text/javascript">
const navbar = document.querySelector(".navbar");

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="footer"> 
  <br><hr><br>
  <img src="Templates/Images/logo.png" width="75">
  &copy 2020 Valorant Coaching Classes. ALL RIGHTS RESERVED.
  <ul>
    <li><a href=""><img src="Templates/Images/facebook.png"></a></li>
    <li><a href=""><img src="Templates/Images/linkedin.png"></a></li>
    <li><a href=""><img src="Templates/Images/twitter.png"></a></li>
    <li><a href=""><img src="Templates/Images/youtube.png"></a></li>
    <li><a href=""><img src="Templates/Images/instagram.png"></a></li>
  </ul>
  <br><br>
</div>
</body>
</html>