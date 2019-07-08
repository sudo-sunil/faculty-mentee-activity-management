<?php

if( isset($_SESSION['user_id']) )
{		
		$id=$_SESSION['user_id'];
		require "connect.php";
		$sql = "SELECT * from userdetails where id='$id'";

		$result = $conn->query($sql);
		$row=$result->fetch_assoc();
		$status=$row['status']; 

		if($status!='1')
		{
			
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
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
		
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
		<div class="panel-heading"><h2><b>Upload your details and Achievements:</b></h2></div>
		<div class="panel-body">

		<form class="form-horizontal" action="achievements.php" method="post" enctype="multipart/form-data">
		<table>
		<tr>
		<td>
		<label for="name"> Name: </label> <input type="text" name="name" placeholder="Enter name" required >
		<div class="error nameError"></div></br>
		<label for="roll"> Roll No.: </label><input type="text" name="rollno" placeholder="Enter Rollno." required >
		<div class="error rollError"></div></br>
		<label for="name"> Course: </label></br> 
		&nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" id="course" name="c" value="CE" onchange="changeCourse()" required>Computer Engineering</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" id="course" name="c" value="IT" onchange="changeCourse()" required>Information Technology</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" id="course" name="c" value="EX" onchange="changeCourse()" required>Electronics</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" id="course" name="c" value="EXTC" onchange="changeCourse() required">Electronics & Telecommunications</br>
		<div class="error courseError"> </div></br>
		<label for="sem"> Semester: </label> <select required type="text" name="sem" class="dropdown">
		<option value="NULL">select</option>
		<option value=1>1</option>
		<option value=2>2</option>
		<option value=3>3</option>
		<option value=4>4</option>
		<option value=5>5</option>
		<option value=6>6</option>
		<option value=7>7</option>
		<option value=8>8</option>
		</select><div class="error semError"></div></br><label for="name"> Div: </label> <input required type="text" name="div" placeholder="Enter division">
		<div class="error divError"></div></br> 
		<label for="mentor"> Mentee: </label><select required type="text" name="mentee" class="dropdown">
		<option value="NULL">---select---</option>
		<option value="teacher1">Mentor 1</option>
		<option value="teacher2">Mentor 2</option>
		<option value="teacher3">Mentor 3</option></select><div class="error mentorError"></div></br>


		 
		<label for="cocurr"> Co-curricular activities: </label>
		<input type="file" required name="cufile[]" multiple  id="cufile" onchange="validate_fileuploadcu(cufile)">
		<div class="error cufileError"></div></br>


		<label for="excurr"> Extra-curricular activities: </label>
		<input type="file" required name="exfile[]" multiple id="exfile" onchange="validate_fileuploadex(exfile)">
		<div class="error exfileError"></div></br>
		
		<!--<button type="button" class="btn btn-primary" onclick="display()">Validate</button>-->

		<button type="submit" class="btn btn-success" name="submit">Save</button></div>
		</form>

</div>
		</div>
		';
		}
		else
		{

		require "connect.php";
		
		echo'
		<div class="bg-img">
		<div class="container" style="margin-top:-25px">
		<div class="panel-group">
		<div class="panel panel-primary">
		<div class="panel-heading"><h2><b>Student Details</b></h2></div>
		<div class="panel-body">
		';

		$id=$_SESSION['user_id'];
		$sql1 = "SELECT * FROM userdetails WHERE id='$id'";

		$result = $conn->query($sql1);

			
			$row = $result->fetch_assoc();
			echo "<p>"."Name : ".$row["name"]."</p>";
			echo "<p>"."Roll.No : ".$row["roll"]."</p>";
			

			echo "<p>"."Course : ".$row["course"]."</p>";
			echo "<p>"."Semester : ".$row["sem"]."</p>";
			echo "<p>"."Division : ".$row["division"]."</p>";
			echo "<p>"."Mentor : ".$row["mentee"]."</p>";
			
			echo'<hr>';

			echo'<label for="cocurr"> Co-curricular activities: </label></br>';
			
			
			
			
			$id=$row['id'];
			$files = scandir ('uploads/'.$id.'/cur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					echo '<img width="300" src="uploads/'.$id.'/cur_img/'.$file.'" height:"300">';
				}
			}
			
			
			echo'<hr>';
			echo'<br />
			<label for="excurr"> Extra-curricular activities: </label></br>';
			
			
			$files = scandir ('uploads/'.$id.'/excur_img');
			foreach($files as $file) {
				if($file !== "." && $file !== "..") {
					echo '<img width="300" src="uploads/'.$id.'/excur_img/'.$file.'" height:"300">';
				}
			}
			
			echo'<br />';
			echo'<br />';
			
			echo'
			<form method="post" action="edit.php">
			<button class="btn btn-primary" type="submit">Edit Form</button>
			</form>
			</div>
			';
		}
	
	}
?>

<script>
var course="";
var name="";
var rollno="";
var sem="";
var div="";
var mentee="";


var nameError=document.querySelector('.nameError');
var rollError=document.querySelector('.rollError');
var semError=document.querySelector('.semError');
var divError=document.querySelector('.divError');	
var mentorError=document.querySelector('.mentorError');
var radioError=document.querySelector('.courseError');
var cufileError=document.querySelector('.cufileError');
var exfileError=document.querySelector('.exfileError');
var validError=document.querySelector('.validError');
function changeCourse()
{
 course=document.querySelector("input[name=c]:checked").value;
 }
function display()
{
if(name=="")
	nameError.innerHTML="<b>Please enter the name</b>";
else
	nameError.innerHTML="";

if(rollno=="")
	rollError.innerHTML="<b>Please enter rollno</b>";
else
	rollError.innerHTML="";


if(course=="")
	radioError.innerHTML="<b>Please select atleast one</b>";
else
	radioError.innerHTML="";

if(sem=="")
	semError.innerHTML="<b>Please select a semester</b>";
else
	semError.innerHTML="";

if(div=="")
	divError.innerHTML="<b>Please enter a division</b>";
else
	divError.innerHTML="";

if(mentee=="")
	mentorError.innerHTML="<b>Please select a mentor</b>";
else
	mentorError.innerHTML="";

}



function validate_fileuploadcu(input_element)
{
	if(cufile=="")
	{
		cufileError.innerHTML="<b>Please select a file</b>";
	}
	else
	{
    cufileError = document.getElementById("cufile");
    var fileName = input_element.value;
    var allowed_extensions = new Array("jpg","png","pdf","doc","docx");
    var file_extension = fileName.split('.').pop(); 
    for(var i = 0; i < allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            valid = true; // valid file extension
            el.innerHTML = "";
            return;
        }
    }
    cufileError.innerHTML="Invalid file";
    valid = false;
	}
}

function validate_fileuploadex(input_element)
{
	if(exfile=="")
	{
		exfileError.innerHTML="<b>Please select a file</b>";
	}
	else
	{
    exfileError = document.getElementById("exfile");
    var fileName = input_element.value;
    var allowed_extensions = new Array("jpg","png","pdf","doc","docx");
    var file_extension = fileName.split('.').pop(); 
    for(var i = 0; i < allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            valid = true; // valid file extension
            el.innerHTML = "";
            return;
        }
    }
    exfileError.innerHTML="Invalid file";
    valid = false;
	}
}


</script>
</div>
</div>
</div>
</form>
</div>
</body>
</html>
