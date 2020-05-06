<?php
$con = mysqli_connect('127.0.0.1','root','');

mysqli_select_db($con,'world');

$sql = "UPDATE city SET Name='$_POST[pname]',CountryCode='$_POST[countrycode]',District='$_POST[district]',Population='$_POST[population]' WHERE ID='$_POST[id]'";

if(mysqli_query($con,$sql))
    header("refresh:1; url=index_city.php");
else
    echo "Not Update";

?>