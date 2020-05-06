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
	echo "Connected Sucessfully";
	}
	

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
<h1>Delete Table: Country</h1>

<div class="table-wrap">
<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="16"><h2>Country</h2></th>
	</tr>
	<t>
		<th> Code </th>
		<th> Name </th>
		<th> Continent </th>
		<th> Region </th>
		<th> Surface Area </th>
		<th> Independence Year </th>
		<th> Population </th>
		<th> Life Expectancy </th>
		<th> Gross National Product (GNP)</th>
		<th> Old GNP </th>
		<th> Local Name </th>
		<th> Government Form </th>
		<th> Head of State </th>
		<th> Capital </th>
		<th> 2nd Code </th>
		<th> Delete Button </th>
		
	</t>
	<?php
	
	//select the database
		mysqli_select_db($conn,$dbname);
		
	//select query
		$sql = "SELECT * FROM country";
		
	//execute the query
		$records = mysqli_query($conn,$sql);
		
		while($row = mysqli_fetch_array($records)){
			echo "<tr>";
			echo "<td>".$row['CountryCode']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Continent']."</td>";
			echo "<td>".$row['Region']."</td>";
			echo "<td>".$row['Surface_Area']."</td>";
			echo "<td>".$row['Indep_Year']."</td>";
			echo "<td>".$row['Population']."</td>";
			echo "<td>".$row['Life_Expectancy']."</td>";
			echo "<td>".$row['GNP']."</td>";
			echo "<td>".$row['GNPOld']."</td>";
			echo "<td>".$row['LocalName']."</td>";
			echo "<td>".$row['Gov_Form']."</td>";
			echo "<td>".$row['Head_Of_State']."</td>";
			echo "<td>".$row['Capital']."</td>";
			echo "<td>".$row['Code2']."</td>";
			echo "<td><a href=deletecountry.php?id=".$row['CountryCode'].">Delete</a></td>";
		}
	
	
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