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
<h1>Update Table: Country Language</h1>
<?php
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'world');
$sql = "SELECT * FROM countrylanguage LIMIT 1000";
$records=mysqli_query($con,$sql);
?>
<div class="table-wrap">
<table align="center" border="1px" style="width:1px; line-height:18px;">
	<tr>
		<th colspan="5"><h2>Country Language</h2></th>
	</tr>
    <t>
        <th>Counry Code</th>
        <th>Language</th>
        <th>Is it Official Language</th>
        <th>Percentage</th>
    </t>
    <?php
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><form action =update_countryLan.php method= post>";
        echo "<td><input type=text name =countrycode value = '".$row['CountryCode']."'></td>";
        echo "<td><input type=text name =language value = '".$row['Language']."'></td>";
        echo "<td><input type=text name =isofficial value = '".$row['IsOfficial']."'></td>";
        echo "<td><input type=text name =percentage value = '".$row['Percentage']."'></td>";
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
