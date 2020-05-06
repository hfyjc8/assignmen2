<?php
$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'world');

$sql = "UPDATE countrylanguage SET IsOfficial='$_POST[isofficial]',Percentage='$_POST[percentage]' WHERE CountryCode = '$_POST[countrycode]' AND Language = '$_POST[language]'";

if(mysqli_query($con,$sql))
    header("refresh:1; url=index_countryLan.php");
else
    echo "Not Update";

?>