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
    font-family: Verdana, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("stafflogin.jpg");

    min-height: 95%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 120% 120%;
}

</style>
</head>





<body>
<?php 
session_start();

if( isset($_SESSION['staff_id']) )
{
	$id=$_SESSION['staff_name'];
echo'	<div class="bs-example">
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
			
			
				<ul class="nav navbar-nav navbar-right">
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-user"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="stafflogin.php"><h4><b>'.$_SESSION["staff_id"].'</b></h4></a></div></li>	
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-out"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="logout.php"><h4><b>Logout</b></h4></a></div></li>
            </ul>
	</div>
	
	</nav>
			
			

</div>

';

		
include('u2.php');
		
		
}
 else
 {
echo '	 

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
	
	</nav>
			
			

</div>




	<div class="bg-img">
	
	
	
	   <div class="panel with-nav-tabs panel-success" style="margin-top:-25px">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li><a href="studentlogin.php">Student</a></li>
                            <li class="active"><a href="#" data-toggle="tab">Teacher</a></li>
        
                        </ul>
                </div>
              
            </div>
	
	
	
<div class="loginbox">
    <form action="dbstafflogin.php" method="post">
	
		</br>
		</br>
		
	
        <div class="form-group">
            <label for="inputEmail">User ID</label>
            <input type="text" class="form-control" name="id" placeholder="USER ID" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
		<div class="error checkError"> </div>
		
		</div>
		
    </form>
</div>

</div>';
 }


?>




</body>
</html>
