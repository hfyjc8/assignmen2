<?php
$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'world');

$sql = "UPDATE country SET CountryCode='$_POST[countrycode]',Name='$_POST[pname]',Continent='$_POST[continent]',Region='$_POST[region]',Surface_Area='$_POST[SurfaceArea]',Indep_Year='$_POST[IndepYear]', Population='$_POST[population]',Life_Expectancy='$_POST[LifeExpectancy]',GNP='$_POST[gnp]',GNPOld='$_POST[gnpold]',LocalName='$_POST[localName]',Gov_Form='$_POST[governmentForm]',Head_of_State='$_POST[headofstate]',Capital='$_POST[capital]',Code2='$_POST[code2]'WHERE CountryCode='$_POST[countrycode]'";

if(mysqli_query($con,$sql))
    header("refresh:1; url=index_country.php");
else
    echo "Not Update";

?>