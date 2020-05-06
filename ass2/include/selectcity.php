<?php
	include_once'inc.php';
	
	$val = 0
	//$val = $_POST['ID'];
	
	if ($val)
	{
		$query = "SELECT * FROM city WHERE ID = $val ";
		//$query = "SELECT * FROM city";
	}
	else
	{
		$query = "SELECT * FROM city WHERE ID = $val ";
		//$query = "SELECT * FROM city";
	}
	
	$result = mysqli_query($conn,$query);

	exit();
?>