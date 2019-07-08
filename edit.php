<style>
#imgtable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
	  padding-left: 50px;
  padding-right: 50px;
  	  padding-top: 50px;
  padding-bottom: 50px;
}

#imgtable td, #imgtable th {
    border: 1px solid #ddd;
    padding: 8px;
}
#imgtable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}




</style>

<?php


session_start();
if( isset($_SESSION['user_id']) )
{
	
		require "connect.php";

		$id=$_SESSION['user_id'];
		$sql1 = "SELECT * FROM userdetails WHERE id='$id'";

		$result = $conn->query($sql1);
	
		$row = $result->fetch_assoc();
	
	
echo'				<div class="bs-example">
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
		<li><div style="margin-top:28px;margin-right:25px;"><a href="studentlogin.php"><h4><b>'.$_SESSION["user_id"].'</b></h4></a></div></li>	
		<li><i style="margin-top:28px;margin-right:15px; " class="glyphicon glyphicon-log-out"></i></li>
		<li><div style="margin-top:28px;margin-right:25px;"><a href="logout.php"><h4><b>Logout</b></h4></a></div></li>
            </ul>
			</div>
	</nav>
</div>';

	
			
		echo '
		<html>
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload achievement</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
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
    background-image: url("bg.jpg");

    min-height: 95%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 120% 120%;
}

</style>
		
		</head>
		<body>

<div class="bg-img">
		<div class="container" style="margin-top:-25px">
		<div class="panel-group">
		<div class="panel panel-primary">
		<div class="panel-heading"><h2><b>Edit your details and Achievements:</b></h2></div>
		<div class="panel-body">

		<form class="form-horizontal" action="achievements.php" method="post" enctype="multipart/form-data">
		<label for="name"> Name: </label> <input required type="text" value="'.$row['name'].'" name="name" placeholder="Enter name"></br></br>
		<label for="roll"> Roll No.: </label><input required type="text" value="'.$row['roll'].'" name="rollno" placeholder="Enter Rollno."></br>
		<label for="name"> Course: </label></br> 
		&nbsp &nbsp &nbsp &nbsp &nbsp<input required type="radio" id="course" ';if($row['course']=="CE") {echo "checked"; } echo' name="c" value="CE" onchange="changeCourse()">Computer Engineering</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input required type="radio" id="course" ';if($row['course']=="IT") {echo "checked"; } echo' name="c" value="IT" onchange="changeCourse()">Information Technology</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input required type="radio" id="course" ';if($row['course']=="EX") {echo "checked"; } echo' name="c" value="EX" onchange="changeCourse()">Electronics</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input required type="radio" id="course" ';if($row['course']=="EXTC") {echo "checked"; } echo' name="c" value="EXTC" onchange="changeCourse()">Electronics & Telecommunications</br>
		<div class="error courseError"> </div></br>
		
		<label for="sem"> Semester: </label> <select required type="text" value="5" name="sem" class="dropdown">
		<option value=1 ';if($row['sem']=="1") {echo "selected"; } echo' >1</option>
		<option value=2 ';if($row['sem']=="2") {echo "selected"; } echo' >2</option>
		<option value=3 ';if($row['sem']=="3") {echo "selected"; } echo' >3</option>
		<option value=4 ';if($row['sem']=="4") {echo "selected"; } echo' >4</option>
		<option value=5 ';if($row['sem']=="5") {echo "selected"; } echo' >5</option>
		<option value=6 ';if($row['sem']=="6") {echo "selected"; } echo' >6</option>
		<option value=7 ';if($row['sem']=="7") {echo "selected"; } echo' >7</option>
		<option value=8 ';if($row['sem']=="8") {echo "selected"; } echo' >8</option>
		
		
		</select>&nbsp &nbsp &nbsp &nbsp &nbsp</br></br><label for="name"> Div: </label> <input type="text" name="div" value="'.$row['division'].'" placeholder="Enter division"></br></br> 
		<label for="mentor"> Mentee: </label><select required type="text" name="mentee" class="dropdown">
		<option value="teacher1" ';if($row['mentee']=="teacher1") {echo "selected"; } echo'>Mentor 1</option>
		<option value="teacher2" ';if($row['mentee']=="teacher2") {echo "selected"; } echo'>Mentor 2</option>
		<option value="teacher3" ';if($row['mentee']=="teacher3") {echo "selected"; } echo'>Mentor 3</option></select></br></br>
	';
			
		

		echo'<label for="cocurr"> Co-curricular activities: </label></br>';
			
			
				echo "<table id='imgtable' align='center' style='text-align: center'> 
				<tr>
				<th style='text-align: center' >Documents</th>
				<th style='text-align: center'>View</th>
				<th style='text-align: center'>Delete</th>
				</tr>";
			
			
			$id=$row['id'];
			$files = scandir ('uploads/'.$id.'/cur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					$path='uploads/'.$id.'/cur_img/'.$file;
					echo '
					<tr>
					<td>
					<img width="300" src="uploads/'.$id.'/cur_img/'.$file.'" height:"300">
					</td>
					<td>
					<form method="post" action="viewdel.php">
					<input type="hidden" name="path" value="'.$path.'">
					<button type="submit" name="action" value="view">View</button>
					</form>
					</td>
					<td>';
					
					echo'
					<form method="POST" action="viewdel.php">
					<input type="hidden" name="path" value="'.$path.'">
					<button type="submit" name="action" value="delete">Delete</button>
					</form>
					</td>
					</tr>
					';
				}
			}
			
			echo'</table>';
			
		echo '
		<label>Upload more files</label><input type="file" name="cufile[]" id="cufile" multiple onchange="validate_fileuploadcu(cufile)">
		<div class="error cufileError"></div></br>
		';
		echo'<hr>';
			
			
			
			
			
			echo'<br />
			<label for="excurr"> Extra-curricular activities: </label></br>';
			
			echo "<table id='imgtable' align='center' style='text-align: center'> 
				<tr>
				<th style='text-align: center' >Documents</th>
				<th style='text-align: center'>View</th>
				<th style='text-align: center'>Delete</th>
				</tr>";
			
			
			$files = scandir ('uploads/'.$id.'/excur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					$path='uploads/'.$id.'/excur_img/'.$file;
					echo '
					<tr>
					<td>
					<img width="300" src="uploads/'.$id.'/excur_img/'.$file.'" height:"300">
					</td>
					<td>
					<form method="post" action="viewdel.php" >
					<input type="hidden" name="path" value="'.$path.'">
					<button type="submit" name="action" value="view">View</button>
					</form>
					</td>
					<td>';
					echo'
					<form method="POST" action="viewdel.php">
					<input type="hidden" name="path" value="'.$path.'">
					<button type="submit" name="action" value="delete">Delete</button>
					</form>
					</td>
					';
				}
			}
			
			

		echo'</table>
		
		<label>Upload more files</label><input type="file" name="exfile[]" id="exfile" multiple onchange="validate_fileuploadex(exfile)">
		<div class="error exfileError"></div></br>

		<button type="submit" name="submit">Save</button>
		</form>

</div>
		</div>

		';

    }
	
	
	
?>
