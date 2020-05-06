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
<h1>Update Table: Country</h1>
<?php
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'world');
$sql = "SELECT * FROM country LIMIT 1000";
$records=mysqli_query($con,$sql);
?>
<div class="table-wrap">
<table align="center" border="1px" style="width:1px; line-height:18px;">
	<tr>
		<th colspan="5"><h2>Country</h2></th>
	</tr>
    <t>
        <th>Code</th>
        <th>Name</th>
        <th>Continent</th>
        <th>Region</th>
        <th>Surface Area</th>
        <th>Indep Year</th>
        <th>Population</th>
        <th>Life Expectancy</th>
        <th>GNP</th>
        <th>GNP Old</th>
        <th>Local Name</th>
        <th>Government Form</th>
        <th>Head of State</th>
        <th>Capital</th>
        <th>Code 2</th>
    </t>
    <?php
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><form action =update_country.php method= post>";
        echo "<td><input type=text name =countrycode value = '".$row['CountryCode']."'></td>";
        echo "<td><input type=text name =pname value = '".$row['Name']."'></td>";
        echo "<td><input type=text name =continent value = '".$row['Continent']."'></td>";
        echo "<td><input type=text name =region value = '".$row['Region']."'></td>";
        echo "<td><input type=text name =SurfaceArea value = '".$row['Surface_Area']."'></td>";
        echo "<td><input type=text name =IndepYear value = '".$row['Indep_Year']."'></td>";
        echo "<td><input type=text name =population value = '".$row['Population']."'></td>";
        echo "<td><input type=text name =LifeExpectancy value = '".$row['Life_Expectancy']."'></td>";
        echo "<td><input type=text name =gnp value = '".$row['GNP']."'></td>";
        echo "<td><input type=text name =gnpold value = '".$row['GNPOld']."'></td>";
        echo "<td><input type=text name =localName value = '".$row['LocalName']."'></td>";
        echo "<td><input type=text name =governmentForm value = '".$row['Gov_Form']."'></td>";
        echo "<td><input type=text name =headofstate value = '".$row['Head_Of_State']."'></td>";
        echo "<td><input type=text name =capital value = '".$row['Capital']."'></td>";
        echo "<td><input type=text name =code2 value = '".$row['Code2']."'></td>";
        echo "<td><input type = submit>";
        echo "</form></tr>";
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
			<li><a href="updatepage.php">Update</a>
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
