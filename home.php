<!DOCTYPE html>

<html>
<head>
<title>SIES GST | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href='loginstyle.css'>

<style>
body, html {
    height: 100%;
    margin: 0;
	    /* The image used */
    background-image: url("index.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 5s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>



</head>

<body>
<?php

session_start();
echo'

			<div class="bs-example">
    <nav class="navbar navbar-default" style="background-color: #FBFCFC ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" style="color:white;" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
				<span class="icon-bar"></span>
            </button>
          	<a href="home.php"><img src="logo.jpg"  style="width:150px;height:68px;"></a>	
        </div>
		<div id="navbarCollapse" >
	<ul class="nav navbar-nav">
		<li><a href="home.php"><h4><b>Home</b><h4></a></li>
		<li><a href="cards.php"><h4><b>Support</b><h4></a></li>
		</ul>
	';
			if( isset($_SESSION['user_id']) )
			{	
			echo'
				<ul class="nav navbar-nav navbar-right">
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-user"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="studentlogin.php"><h4><b>'.$_SESSION["user_id"].'</b></h4></a></div></li>	
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-out"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="logout.php"><h4><b>Logout</b></h4></a></div></li>
            </ul>';
			}
			else if(isset($_SESSION['staff_id']) )
			{
				echo'
			
			<ul class="nav navbar-nav navbar-right">
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-user"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="stafflogin.php"><h4><b>'.$_SESSION["staff_id"].'</b></h4></a></div></li>	
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-out"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="logout.php"><h4><b>Logout</b></h4></a></div></li>
            </ul>
			
			';
			}
			else
			{echo'
		<ul class="nav navbar-nav navbar-right">
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-user"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="regs.php"><h4><b>Sign Up</b></h4></a></div></li>	
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-in"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="studentlogin.php"><h4><b>Login</b></h4></a></div></li>
            </ul>';
	
			}

		
	
echo'			
	</nav>
			
	<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="vision.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="mission.png" style="width:100%">

</div>

<div class="mySlides fade">
 
  <img src="q1.png" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="q2.png" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="q3.png" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>		
</div>
</div>




';
?>

</body>
</html>
