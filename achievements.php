<?php 
require "connect.php";
session_start();

	
$id=$_SESSION['user_id'];
$name = $_POST['name'];
$roll=$_POST['rollno'];
$course = $_POST['c'];
$sem = $_POST['sem'];
$div = $_POST['div'];
$mentee = $_POST['mentee'];




$sql = "Update userdetails SET name='$name',roll='$roll' ,course='$course',sem='$sem',division='$div',mentee='$mentee'  where id='$id'";

$result = $conn->query($sql);








	$id=$_SESSION['user_id'];
	$file = $_FILES['cufile'];
	
	$fileName = $_FILES['cufile']['name'];
	$fileTmpName = $_FILES['cufile']['tmp_name'];
	$fileSize = $_FILES['cufile']['size'];
	$fileError = $_FILES['cufile']['error'];
	$fileType = $_FILES['cufile']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx');
	
	
	mkdir('C:/xampp/htdocs/internship/uploads/'.$id, 0777, true);
	
	
	for($i = 0; $i < count($_FILES['cufile']['name']); $i++)
	{
		$filetmp = $_FILES["cufile"]["tmp_name"][$i];
		$filename = $_FILES["cufile"]["name"][$i];
		$filetype = $_FILES["cufile"]["type"][$i];
		
		
		
		mkdir('C:/xampp/htdocs/internship/uploads/'.$id.'/cur_img', 0777, true);
		$filepath = 'uploads/'.$id.'/cur_img/'.$filename;
		
		
	
	move_uploaded_file($filetmp,$filepath);
	
	
	}

	
	
	for($i = 0; $i < count($_FILES['exfile']['name']); $i++)
	{
		$filetmp = $_FILES["exfile"]["tmp_name"][$i];
		$filename = $_FILES["exfile"]["name"][$i];
		$filetype = $_FILES["exfile"]["type"][$i];
		
		
		mkdir('C:/xampp/htdocs/internship/uploads/'.$id.'/excur_img', 0777, true);
		$filepath = 'uploads/'.$id.'/excur_img/'.$filename;
		
		
	
	move_uploaded_file($filetmp,$filepath);
	
	
	}
	
	
	


$sql = "Update userdetails SET status='1' where id='$id'";

$result = $conn->query($sql);


header("Location: studentlogin.php");

?>