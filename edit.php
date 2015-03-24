<?php
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$link = mysql_connect($host,$username,$password)or die("Could not connect");
	$db = mysql_select_db("reservation", $link)or die("Could not select database");
	$tName = $_SESSION["name"];
	
	$age = $_POST['eAge'];
	$address = $_POST['eAddress'];
	$contact = $_POST['eContact'];
	$email = $_POST['eEmail'];

	
	$sql = mysql_query("UPDATE reserved SET age='$age',address='$address', contact='$contact', email='$email'
						WHERE name='$tName'");
	
	
	if ($sql)
			echo " Edit Successfully!";		
	else
			echo "Problem occurred!"; 
		
	echo"<a href='teamlist.php'>Homepage</a>";
	
	?>
