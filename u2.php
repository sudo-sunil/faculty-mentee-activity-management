
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
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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
    background-size: cover;
}


p.ex1 {
 
    padding-left: 150px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
	  padding-left: 50px;
  padding-right: 50px;
  	  padding-top: 50px;
  padding-bottom: 50px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color:  	 #d9d9d9;}
#customers tr:hover {background-color: #999999;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

</head>

<body>

<div class="bg-img">


<div style="background-color:#D3D3D3 " >
  <h1 style="  margin-top:-20px " >Your Mentee List :</h1>
 
</div>


<br \>

<?php


require "connect.php";
$mentee=$_SESSION['mentee'];
$id=$_SESSION["staff_name"];
$sql1 = "SELECT * FROM userdetails WHERE mentee='$id'";
$result = $conn->query($sql1);


if ($result->num_rows > 0)
	{
	
	{
		
				
				echo "<table id='customers' align='center' style='text-align: center'> 
				<tr>
				<th style='text-align: center' >Name</th>
				<th style='text-align: center'>Roll No.</th>
				<th style='text-align: center'>View Details</th>
				</tr>";
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{	
					$roll=$row["roll"];
					
					
					
					
					echo'<tr><td>' . $row["name"]. '</td><td>' . $row["roll"]. '</td>
					<td>
					<form method="POST" target="_blank" action="display.php">
					<input type="hidden" name="roll" value="'.$roll.'">
					<button type="submit" name="view">View</button>
					</form>
					</td>
					</tr>';
				}
				
		
	}
	} 
else 
{
	echo "0 results";
}
		
$conn->close();


?>


</div>
</body>
</html>
