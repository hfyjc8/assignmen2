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
	
	$val = $_POST['Code'];
	
	if (empty($val)) {
	$query = "SELECT * FROM countrylanguage";
	$result = mysqli_query($conn,$query);
}
else 
{
	
	$sql = "SELECT * FROM countrylanguage WHERE CountryCode = ?";
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
<h1>Select Table: Country Language</h1>
<form action="selectpagelanguage.php" method="post">
<div class="textbox">
	<label for="ID">Country Code: </label><br>
	<input type="text" name="Code" placeholder="MYS" value=""/><br>
	<input class="btn" type="submit" value="Submit" />
</div>
</form>
<div class="table-wrap">
<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="4"><h2>Country Language</h2></th>
	</tr>
	<t>
		<th> Country Code </th>
		<th> Language </th>
		<th> Is Official </th>
		<th> Percentage </th>
	</t>
	
<?php 

if($result){
while($rows = mysqli_fetch_array($result))
	{
?>

		<tr>
			<td><?php echo $rows['CountryCode']; ?></td>
			<td><?php echo $rows['Language']; ?></td>
			<td><?php echo $rows['IsOfficial']; ?></td>
			<td><?php echo $rows['Percentage']; ?></td>
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