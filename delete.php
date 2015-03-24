<?php
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$link = mysql_connect($host,$username,$password)or die("Could not connect");
	$db = mysql_select_db("reservation", $link)or die("Could not select database");
	$tName = $_SESSION["name"];
	$sql = "DELETE FROM reserved WHERE name='$tName'";
	
	mysql_query($sql);
	
	if ($sql)
			echo " Add Successfully!";		
	else
			echo "Problem occurred!"; 
		
	echo"<a href='index'>Homepage</a>";
	
	session_destroy();
?>
