<?php

require "connect.php";

$id=$_POST['id'];
$psw=$_POST['psw'];

$sql= $conn->prepare("SELECT * from userdetails WHERE id=?");
$sql->bind_param('s', $id);
$sql->execute();
$result = $sql->get_result();
$message = '';

if($result->num_rows==0)
{	
	
$sql= $conn->prepare("INSERT into userdetails set id=?,password=?");
$sql->bind_param('ss', $id,$psw);
$sql->execute();

header("Location: studentlogin.php");



}
else
{
	$message="USER ID already exists,Choose different USER ID";
	echo "<script type='text/javascript'> alert('$message');</script>";
	include('regs.php');
}	
	
?>






