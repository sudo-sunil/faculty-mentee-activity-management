<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href='loginstyle.css'>
<style>



.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
	
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	align: center;
}

.container {
    padding: 2px 16px;
	
	
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
			
			
</div>
</div>




';
?>


<div class="container">
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-3" >
			<img src="img_avatar.png"   style="width:100%">
				<div class="container" style="align:center">
					<h4><b>Aakash M</b></h4> 
					<hr>
					<b>
						Contact:<br />
						aakash.maji217@siesgst.ac.in
					</b>
					</div>			
			</div>
			
			
            <div class="col-sm-6 col-md-4 col-lg-3">
			<img src="img_avatar.png"   style="width:100%">
				<div class="container" style="align:center">
					<h4><b>Ramakrishnan V</b></h4> 
					<hr>
					<b>
						Contact:<br />
						yadavramakrishnan@gmail.com
					</b>
					</div>					
			</div>
			
			
			
            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-md-block"></div>
			
			
			
            <div class="col-sm-6 col-md-4 col-lg-3">
			<img src="img_avatar.png"   style="width:100%">
				<div class="container" style="align:center">
					<h4><b>Sunil P</b></h4> 
					<hr>
					<b>
						Contact:<br />
						sunil.pillai16@siesgst.ac.in
					</b>
					</div>					
			</div>
			
			
            <div class="col-sm-6 col-md-4 col-lg-3">
			<img src="img_avatar2.png"   style="width:100%">
				<div class="container" style="align:center">
					<h4><b>Swapnali S</b></h4> 
					<hr>
					<b>
						Contact:<br />
						sadegaonkar.swapnali217@siesgst.ac.in
					</b>
					</div>				
			</div>
			
			
			
            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-lg-block"></div>
            
        </div>
    </div>


</body>
</html> 