<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>


<body>






<div class="slideshow-container">
  
  
	
		<?php
					require "connect.php";
					$id=$_POST['id'];
					$sql1 = "SELECT * FROM userdetails WHERE id='$id'";

					$result = $conn->query($sql1);
					$row = $result->fetch_assoc();
					$id=$row['id'];
					
					if($_POST['action']=='viewcur')
					{
						echo'<label for="cocurr"> Co-curricular activities: </label></br>';
						
						$files = scandir ('uploads/'.$id.'/cur_img');
						foreach($files as $file) {
							if($file !== "." && $file !== "..") {
								echo '
								<div class="mySlides1">
								<img width="300" src="uploads/'.$id.'/cur_img/'.$file.'" style="width:100%">
								</div>';
							}
						}
					}
					else
					{
						echo'<label for="cocurr"> Extra-curricular activities: </label></br>';
						$files = scandir ('uploads/'.$id.'/excur_img');
						foreach($files as $file) {
							if($file !== "." && $file !== "..") {
								echo '
								<div class="mySlides1">
								<img width="300" src="uploads/'.$id.'/excur_img/'.$file.'" style="width:100%">
								</div>';
							}
						}
					}
						
						
		?>
 

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 
