<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Details</title>
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
    background-image: url("stafflogin.jpg");

    min-height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 120% 120%;
}

</style>


</head>
<body>
<div class="bg-img">

<div class="container">
<div class="panel-group">
<div class="panel panel-primary">
<div class="panel-heading"><h2><b>Student Details:</b></h2></div>
<div class="panel-body">
<?php

require "connect.php";
session_start();
$roll=$_POST['roll'];

$id=$_SESSION['staff_name'];
$sql1 = "SELECT * FROM userdetails WHERE roll='$roll'";

$result = $conn->query($sql1);
while($row = $result->fetch_assoc()) 
{	

	echo "<p>"."Name : ".$row["name"]."</p>";
	echo "<p>"."Roll No. : ".$row["roll"]."</p>";
	echo "<p>"."Course : ".$row["course"]."</p>";
	echo "<p>"."Semester : ".$row["sem"]."</p>";
	echo "<p>"."Division : ".$row["division"]."</p>";
	echo "<p>"."Mentor : ".$row["mentee"]."</p>";
	
	echo'
	<label for="cocurr"> Co-curricular activities: </label></br>';
	
			$id=$row['id'];
			$files = scandir ('uploads/'.$id.'/cur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					echo '<img width="300" src="uploads/'.$id.'/cur_img/'.$file.'" height:"300">';
				}
			}
		
	echo'<form method="POST" target="_blank" action="viewall.php">
		<input type="hidden" name="id" value="'.$id.'">
		<button type="submit" name="action" value="viewcur">View Documents</button>
		</form>';
					
	echo'	</br>
	<label for="excurr"> Extra-curricular activities: </label></br>';
			$files = scandir ('uploads/'.$id.'/excur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					echo '<img width="300" src="uploads/'.$id.'/excur_img/'.$file.'" height:"300">';
				}
			}
	echo'<form method="POST" target="_blank" action="viewall.php">
			<input type="hidden" name="id" value="'.$id.'">
			<button type="submit" name="action" value="viewexcur">View Documents</button>
			</form>';
	
	
	
	
	
	


}
		
				
$conn->close();

?>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
