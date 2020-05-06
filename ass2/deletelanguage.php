<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "world";

//Create connection in mysqli
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	mysqli_select_db($conn,$dbname);
	
	$sql = "DELETE FROM countrylanguage WHERE CountryCode='$_GET[id]' AND Language='$_GET[name]'";
	
	if(mysqli_query($conn,$sql))
		header("refresh:1; url = deletepagelanguage.php");
	else
		echo "Not Deleted";
	
	
?>