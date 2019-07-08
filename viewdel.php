<?php



	if($_POST['action']=='delete')
	{

		$path=$_POST['path'];
		echo $path;
		if(!unlink($path))
		{
			echo"Error";
		}
		else
		{
			header("Location: edit.php");
		}
		
	}
	else
	{
		$path=$_POST['path'];
		echo'
		<img src="'.$path.'" width="80%">';
	}
	
?>