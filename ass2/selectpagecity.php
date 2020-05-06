<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "world";

// Create connection in mysqli

	$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection in mysqli
	if(!$conn){
	die("Error on the connection" .mysqli_error());
	}
	else
	{
		echo "Connect Succesfully";
	}
	
	$val = $_POST['ID'];
	
	if ($val == '0') {
	$query = "SELECT * FROM city";
	
	$result = mysqli_query($conn,$query);
	$rownum = mysqli_num_rows($result);
}
else 
{
	
	$sql = "SELECT * FROM city WHERE ID = ?";
	$stmt= $conn->prepare($sql);
	$stmt->bind_param("s", $val);
	$stmt->execute();
	$result = mysqli_stmt_get_result($stmt);
}
$rownum = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="include/newstyle.css">
<meta charset="utf-8">
<style>
.error {color: #FF0000;}
</style>
<title>Assignment 2</title>
</head>


<body>
<div class="select-box" >
<h1>Select Table: City</h1>
<form action="selectpagecity.php" method="post">
<div class="textbox">
	<label for="ID">ID number: </label><br>
	<input type="number" name="ID" min="0" step="1" placeholder="0" value="0"/><br>
	<input class="btn" type="submit" value="Submit" />
</div>
</form>
<div class="table-wrap">
<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="5"><h2>City</h2></th>
	</tr>
	<t>
		<th> ID </th>
		<th> Name </th>
		<th> Country Code </th>
		<th> District </th>
		<th> Population </th>
	</t>
	
<?php 

if($result){
while($rows = mysqli_fetch_array($result))
	{
?>

		<tr>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['ID']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Name']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['CountryCode']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['District']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Population']; ?></td>
		</tr>
		
<?php 
	}
}
else {
	die("Error");
}
empty($result);
echo $rownum ." rows retrieved from database";
$conn->close();
?>

</table> 
</div>
</div> 
</body>

<header>
	<div class="xd"><a href="mainpage.php">World</a></div>
	<nav>
		<ul class="nav_links">
			<li><a href="selectpage.php">Select</a>
			<div class="submenu">
				<ul>
					<li><a href="selectpagecity.php">City</a></li>
					<li><a href="selectpagecountry.php">Country</a></li>
					<li><a href="selectpagelanguage.php">Country Lanugage</a></li>
				</ul>
			</div>
			</li>
			<li><a href="deletepage.php">Delete</a>
			<div class="submenu">
				<ul>
					<li><a href="deletepagecity.php">City</a></li>
					<li><a href="deletepagecountry.php">Country</a></li>
					<li><a href="deletepagelanguage.php">Country Lanugage</a></li>
				</ul>
			</div>
			</li>
			<li><a href="insertpage.php">Insert</a></li>
			<li><a href="#">Update</a>
			<div class="submenu">
				<ul>
					<li><a href="index_city.php">City</a></li>
					<li><a href="index_country.php">Country</a></li>
					<li><a href="index_countryLan.php">Country Lanugage</a></li>
				</ul>
			</div>
			</li>
			<li>
			</li>
		</ul>
	</nav>
</header>



</html>