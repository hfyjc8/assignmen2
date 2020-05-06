<?php
	include_once'inc.php';
	$name=$_POST['Cname'];
	$CountryCode=$_POST['counCode'];
	$dis=$_POST['district'];
	$cpop=$_POST['citypopulation'];	
	$Cname=$_POST['countryname'];
	$conti=$_POST['continent'];
	$reg=$_POST['region'];
	$surf=$_POST['surfacearea'];
	$indep=$_POST['indepyear'];
	$pop=$_POST['countrypopulation'];
	$lifeex=$_POST['life'];
	$GNP=$_POST['gnp'];
	$GNPOLD=$_POST['gnpold'];
	$local=$_POST['localname'];
	$govform=$_POST['goverform'];
	$headof=$_POST['headofstate'];
	$cap=$_POST['capital'];
	$code2=$_POST['counCode2'];
	
	$lang=$_POST['countrylanguage'];
	$offi=$_POST['isofficial'];
	$per=$_POST['percentage'];
	$em="";
	if($offi=="Official")
	{
		$offi="T";
	}
	else{
		$offi="F";
	}
if(empty($CountryCode)){
		header("Location:../assignment2.php?signup=CountryCode");
		exit();
	}
	else{
		$sql1 = "INSERT INTO city (Name,CountryCode,District,Population) VALUES ('$name','$CountryCode','$dis','$cpop');";
		if(!empty($name))
		{
		mysqli_query($conn,$sql1);
		}
		if(!empty($Cname))
		{
		$sql2 = "INSERT INTO country (CountryCode,Name,Continent,Region,Surface_Area,Indep_Year,Population,Life_Expectancy,GNP,GNPOld,LocalName,Gov_Form,Head_of_State,Capital,Code2) VALUES ('$CountryCode','$Cname','$conti','$reg','$surf','$indep','$pop','$lifeex','$GNP','$GNPOLD','$local','$govform','$headof','$cap','$code2');";
		mysqli_query($conn,$sql2);
		}
		if(!empty($lang))
		{
		$sql3 = "INSERT INTO countrylanguage (CountryCode,Language,IsOfficial,Percentage) VALUES ('$CountryCode','$lang','$isofficial','$percentage');";
		mysqli_query($conn,$sql3);
		}
	header("Location:../insertpage.php?signup=success");
	}

?>