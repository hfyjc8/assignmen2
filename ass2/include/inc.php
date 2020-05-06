<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="world";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn)
{
	die('not connected');
}

?>
