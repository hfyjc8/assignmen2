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
	
	$val = $_POST['CCode'];
	
	if (empty($val)) {
	$query = "SELECT * FROM country";
	$result = mysqli_query($conn,$query);
}
else 
{
	
	$sql = "SELECT * FROM country WHERE CountryCode = ?";
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
<div class="select-box2" >
<h1>Select Table: Country</h1>
<form action="selectpagecountry.php" method="post">
<div class="textbox">
	<label for="ID">Country Code: </label><br>
	<input type="text" name="CCode" placeholder="MYS" value=""/><br>
	<input class="btn" type="submit" value="Submit" />
</div>
</form>
<div class="table-wrap">
<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="15"><h2>Country</h2></th>
	</tr>
	<t>
		<th style="padding-left:10px;padding-right:10px;"> Code </th>
		<th style="padding-left:10px;padding-right:10px;"> Name </th>
		<th style="padding-left:10px;padding-right:10px;"> Continent </th>
		<th style="padding-left:10px;padding-right:10px;"> Region </th>
		<th style="padding-left:10px;padding-right:10px;"> Surface Area </th>
		<th style="padding-left:10px;padding-right:10px;"> Independence Year </th>
		<th style="padding-left:10px;padding-right:10px;"> Population </th>
		<th style="padding-left:10px;padding-right:10px;"> Life Expectancy </th>
		<th style="padding-left:10px;padding-right:10px;"> Gross National Product (GNP)</th>
		<th style="padding-left:10px;padding-right:10px;"> Old GNP </th>
		<th style="padding-left:10px;padding-right:10px;"> Local Name </th>
		<th style="padding-left:10px;padding-right:10px;"> Government Form </th>
		<th style="padding-left:10px;padding-right:10px;"> Head of State </th>
		<th style="padding-left:10px;padding-right:10px;"> Capital </th>
		<th style="padding-left:10px;padding-right:10px;"> 2nd Code </th>
	</t>
	
<?php 

if($result){
while($rows = mysqli_fetch_array($result))
	{
?>

		<tr style="overflow-x:auto;">
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['CountryCode']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Name']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Continent']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Region']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Surface_Area']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Indep_Year']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Population']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Life_Expectancy']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['GNP']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['GNPOld']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['LocalName']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Gov_Form']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Head_Of_State']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Capital']; ?></td>
			<td style="padding-left:10px;padding-right:10px;"><?php echo $rows['Code2']; ?></td>
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