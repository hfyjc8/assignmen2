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
<div class="select-box" >
<h1>Delete Table: Lanugage</h1>

<div class="table-wrap">
<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="5"><h2>Lanugage</h2></th>
	</tr>
	<t>
		<th> Country Code </th>
		<th> Language </th>
		<th> Is Official </th>
		<th> Percentage </th>
		<th> Delete Button </th>
		
	</t>
	<?php
	
	//select the database
		mysqli_select_db($conn,$dbname);
		
	//select query
		$sql = "SELECT * FROM countrylanguage";
		
	//execute the query
		$records = mysqli_query($conn,$sql);
		
		while($row = mysqli_fetch_array($records)){
			echo "<tr>";
			echo "<td>".$row['CountryCode']."</td>";
			echo "<td>".$row['Language']."</td>";
			echo "<td>".$row['IsOfficial']."</td>";
			echo "<td>".$row['Percentage']."</td>";
			echo "<td><a href=deletelanguage.php?id=".$row['CountryCode']."&name=".$row['Language'].">Delete</a></td>";
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