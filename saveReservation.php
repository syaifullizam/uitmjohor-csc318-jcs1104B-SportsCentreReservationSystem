<?php

	$host="localhost";
	$username="root";
	$password="";
	$link = mysql_connect($host,$username,$password)or die("Could not connect");
	

	$db = mysql_select_db("reservation", $link)or die("Could not select database");
	session_start();
	$name = $_POST['Name'];
	$age = $_POST['Age'];
	$address = $_POST['Address'];
	$contact = $_POST['Contact'];
	$email = $_POST['Email'];
	$facilities = $_POST['facilities'];
	$tstart = $_POST['start'];
	$tend = $_POST['end'];
	$equip = $_POST['equip'];
	$pay = $_POST['pay'];
	$_SESSION["name"] = "$name";
	

	
	$sql = "INSERT INTO reserved(name, age, address, contact, email, facilities, start, end, equip, pay) VALUES ('$name','$age','$address','$contact','$email','$facilities','$tstart','$tend','$equip','$pay')";
	
	mysql_query($sql);
	
	if ($sql)
			echo " Add Successfully!";		
	else
			echo "Problem occurred!"; 
		
	echo"<a href='teamList.php'>View Team List</a>";
?>
