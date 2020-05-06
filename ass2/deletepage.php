<?php
	include_once'include/inc.php'
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
<header>
	<div class="xd"><a href="mainpage.php">World</a></div>
	<nav>
		<ul class="nav_links">
			<li><a href="">Select</a>
			<div class="submenu">
				<ul>
					<li><a href="selectpagecity.php">City</a></li>
					<li><a href="selectpagecountry.php">Country</a></li>
					<li><a href="selectpagelanguage.php">Country Lanugage</a></li>
				</ul>
			</div>
			</li>
			<li><a href="#">Delete</a>
			<div class="submenu">
				<ul>
					<li><a href="#">City</a></li>
					<li><a href="#">Country</a></li>
					<li><a href="#">Country Lanugage</a></li>
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
	<div class="selection">
	<h1>Delete Menu</h1>
	<div class="box">
	<button class="btn" onclick="window.location.href = 'deletepagecity.php';">City</button>
	<button class="btn" onclick="window.location.href = 'deletepagecountry.php';">Country</button>
	<button class="btn" onclick="window.location.href = 'deletepagelanguage.php';">Language</button>

	</div>
	</div>
</body>
</head>
</html>