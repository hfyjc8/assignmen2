<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "world";

//Create connection in mysqli
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	mysqli_select_db($conn,$dbname);
	
	$sql = "DELETE FROM country WHERE CountryCode='$_GET[id]'";
	
	if(mysqli_query($conn,$sql))
		header("refresh:1; url = deletepagecountry.php");
	else
		echo "Not Deleted";
	
	
?>