<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href='loginstyle.css'>
<style>
body {
font-family: Verdana, sans-serif;
    
	color: black;
	 height: 100%;
    margin: 0;
	    /* The image used */
    background-image: url("regs.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    width:350px;
	height:500px;
	color:blue;
	background-color: #ffffff;
	border-color:gray;
	border-width:10px;
	border-style:solid;
	border-radius:20px;
	 
	box-sizing:border-box;
	padding:10px;
	
	   opacity: 0.8;
    filter: alpha(opacity=60);
	
	margin:auto;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
	color:black;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
	color:black;

}

/* Overwrite default styles of hr */


/* Set a style for the submit button */
.registerbtn {
   	text-align:center;
	background-color:#28B463;
	bottom: 0;
    left: 200px;
    right: 100px;
	width:120px;
    margin: 10px 95px;
	padding: 6px 20px;
	font-size: 15px;
	display:inline-block;
	
}


/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.title {
	color: black;
   
	
}
</style>
</head>
<body>



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
		
	</div>
	<ul class="nav navbar-nav navbar-right">
			
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-in"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="studentlogin.php"><h4><b>Login</b></h4></a></div></li>
            </ul>

	</nav>
			
			

</div>





<?php

$message="";
?>



		

<form action="dbregister.php" method="POST" onsubmit='return formValidator();'>
  <div class="container">
    <h1 class="title" style="text-align:center; color:#663399">Register</h1>
    <p class="title" style="text-align:center; color:#2F4F4F">Please fill in this form to create an account.</p>
    <hr>
	<div class="form-group">
    <label for="id"><b>USER ID</b></label>
    <input type="text" style="text-align:center;" placeholder="Enter User id" name="id" required>
	
	
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	</div>
	<?php
	
	echo $message;?>
   
	
    <button type="submit" class="btn btn-primary">Register</button>

    <p style="text-align:center; color:#795548"><strong>Already have an account?</strong> <a href="studentlogin.php"><b>Sign in</b></a></p>
  </div>
</form>

</body>
</html>


