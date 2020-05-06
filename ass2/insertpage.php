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
<?php $nameErr = $Coun = $CnameErr = "";
	$fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if(strpos($fullURL,"signup=empty")==true){
		$nameErr = "City Name is required";
		$Coun = "CountryCode is required";
		$CnameErr = "Country Name is required";

	}
	elseif (strpos($fullURL,"signup=CityName")==true){
		$nameErr = "City Name is required";

	}
	elseif(strpos($fullURL,"signup=CountryName")==true){
		$CnameErr = "Country Name is required";

	}
	elseif(strpos($fullURL,"signup=CountryCode")==true){
		$Coun = "CountryCode is required";

	}
	elseif (strpos($fullURL,"signup=CountryCode&&CityName")==true){
		$Coun = "CountryCode is required";
		$nameErr = "City Name is required";

	}
	elseif(strpos($fullURL,"signup=CountryCode&&CountryName")==true){
		$Coun = "CountryCode is required";
		$CnameErr = "Country Name is required";

	}
	elseif(strpos($fullURL,"signup=CityName&&CountryName")==true){
		$nameErr = "City Name is required";
		$CnameErr = "Country Name is required";

	}
	elseif(strpos($fullURL,"signup=success")==true){
		echo "<script>alert('Insert Successfully'); location.href = 'insertpage.php';</script>";
	}
	?>
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
	<div class="login-box">
	<h1>Insert</h1>
	<form action="include/insert.php" method="post">
		<div class="textbox">
		<label for="counCode">Country Code:</label><br>
		<span class="error">* <?php echo $Coun;?></span>
		<input type="text" id="counCode" name="counCode" placeholder="MYS" onsubmit="required()"><br>
		</div>
		<div class="textbox">
		<label for="countryname">Country:</label><br>
		<span class="error">*Insert for Country <?php echo $CnameErr;?></span>
		<input type="text" id="countryname" name="countryname" placeholder="Malaysia"><br>
		</div>
		<div class="textbox">
		<label for="continent">Continent:</label><br>
		<select id="continent" name="continent"><br>
			<option value="asia">Asia</option>
			<option value="europe">Europe</option>
			<option value="nothamerica">Noth America</option>
			<option value="africa">Africa</option>
			<option value="oceania">Oceania</option>
			<option value="antartica">Antartica</option>
			<option value="sourthamerica">Sourth America</option>
			</select><br>
			</div>
		<div class="textbox">
		<label for="region">Region:</label><br>
		<input type="text" id="region" name="region" placeholder="region"><br>
		</div>
		<div class="textbox">
		<label for="surfacearea">Surface Area:</label><br>
		<input type="number" id="surfacearea" name="surfacearea" step="0.01" placeholder="1"><br>
		</div>
		<div class="textbox">
		<label for="indepyear">Independence Year:</label><br>
		<input type="number" id="indepyear" name="indepyear" placeholder="Year"><br>
		</div>
		<div class="textbox">
		<label for="countrypopulation">Population of Country:</label><br>
		<input type="number" id="countrypopulation" name="countrypopulation" placeholder="1"><br>
		</div>
		<div class="textbox">
		<label for="life">Life Expectency:</label><br>
		<input type="number" id="life" name="life" step="0.01" placeholder="1"><br>
		</div>
		<div class="textbox">
		<label for="gnp">GNP:</label><br>
		<input type="number" id="gnp" name="gnp" step="0.01" placeholder="1"><br>
		</div>
		<div class="textbox">
		<label for="gnpold">GNP OLD:</label><br>
		<input type="number" id="gnpold" name="gnpold" step="0.01" placeholder="1"><br>
		</div>
		<div class="textbox">
		<label for="localname">Local Country Name:</label><br>
		<input type="text" id="localname" name="localname" placeholder="Malaysia"><br>
		</div>
		<div class="textbox">
		<label for="goverform">Goverment Form:</label><br>
		<input type="text" id="goverform" name="goverform" placeholder="Communis"><br>
		</div>
		<div class="textbox">
		<label for="headofstate">Head of State:</label><br>
		<input type="text" id="headofstate" name="headofstate" placeholder="Head of State"><br>
		</div>
		<div class="textbox">
		<label for="capital">Capital:</label><br>
		<input type="text" id="capital" name="capital" placeholder="Kuala Lumpur"><br>
		</div>
		<div class="textbox">
		<label for="counCode2">Country Code2:</label><br>
		<input type="text" id="counCode2" name="counCode2" placeholder="MY"><br>
		</div>
		<div class="textbox">
		<label for="cityName">City:</label><br>
		<span class="error">*Insert for City <?php echo $nameErr;?></span><br>
		<input type="text" id="Cname" name="Cname" placeholder="Seremban"><br>
		</div>
		<div class="textbox">
		<label for="district">District:</label><br>
		<input type="text" id="district" name="district" placeholder="District"><br>
		</div>
		<div class="textbox">
		<label for="population">Population of City:</label><br>
		<input type="number" id="citypopulation" name="citypopulation" placeholder="City population"><br>
		</div>
		<div class="textbox">
		<label for="countrylanguage">Country Language:</label><br>
		<span class="error">*Insert for CountryLanguage</span>
		<input type="text" id="countrylanguage" name="countrylanguage" placeholder="countrylanguage"><br>
		</div>
		<div class="textbox">
		<p>Is the language Official:</p>
		<input type="radio" id="official" name="isofficial" value="Official">
		<label for="official">Official</label>&nbsp;
		<input type="radio" id="nonofficial" name="isofficial" value="Not Official">
		<label for="nonofficial">Non Official</label><br>
		</div>
		<div class="textbox">
		<label for="percentage">Percentage of Language:</label><br>
		<input type="number" id="percentage" name="percentage" step="0.1" placeholder="Percentage of Language"><br>
		</div>
		<input class="btn" type="submit" value="Submit">
	
	</form>
	</div>
	
</body>
</html>