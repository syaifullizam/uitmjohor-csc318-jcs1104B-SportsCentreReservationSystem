<?php 
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$link = mysql_connect($host,$username,$password) or die("Could not connect");
	$db = mysql_select_db("reservation", $link) or die("Could not select database");
	$tName = $_SESSION["name"];
	$sql = "SELECT * FROM reserved WHERE name='$tName'";
	$query = mysql_query($sql);
	$rs = mysql_fetch_assoc($query);
	

	
?>

<html>
<head>
	<style>
		#box 
		{
			font-weight:100;
			background:rgba(50, 50, 50, 0.3);
			color:#fff;
			padding:10px;
			width:50%;
			margin:1%;
			border-radius:10px;
			float:none;
			font-size:17px
		}
	</style>
	<script>
			function validate()
			{
				with(document.edit)
				{
					if(eAge.value == "")
					{
						alert("Please enter valid age.");
						eAge.focus();
						return false;
					
					}
					
					if(eAge.value != "" && isNaN(eAge.value))
					{
						alert("Please enter valid age.");
						eAge.focus();
						return false;
					}
					var age = eAge.value;
					if(age.toString().length > '2')
					{
						alert("Please enter valid age.");
						eAge.focus();
						return false;
					}
					
					if(eAddress.value == "")
					{
						alert("Please enter valid address.");
						eAddress.focus();
						return false;
					
					}
					if(eContact.value =="")
					{
						alert("Please enter valid contact number.");
						eContact.focus();
						return false;
					}
					if(eContact.value != "" && isNaN(eContact.value))
					{
						alert("Please enter valid contact number.");
						eContact.focus();
						return false;
					}
					
					var email = eEmail.value;
					if( email.indexOf("@") == -1)
					{
						alert("Please enter valid email.");
						eEmail.focus();
						return false;
					}
				}
				return true;
			}
		</script>
</head>

<body style="background-color:#66CCCC"> 
	<center>
		<p id="demo"></p>

		<script>
		document.getElementById("demo").innerHTML = Date();
		</script>
			
		<table>
			<tr><td> <img src="image/banner.png" style= width="900" height="250"/> </td> </tr>	
			
		</table>
		
		<table cellspacing=25>
		<center>
				<tr><td><center> <a href="index.html"> <button style="background-color:#0099CC; width: 150px; height: 50px"> <h3>  HOME  </h3> </button> </a> </center></td> 
					<td><center> <a href="bodybuilding.html"> <button style="background-color:#0099CC; width: 150px; height: 50px"> <h3> ABOUT US  </h3> </button> </a> </center></td>
					<td><center> <a href="anime.html"> <button style="background-color:#0099CC; width: 150px; height: 50px"> <h3>  SPECIAL OFFERS  </h3> </button> </a> </center></td> 
					<td><center> <a href="feedback.html"> <button style="background-color:#0099CC; width: 150px; height: 50px"> <h3>  RESERVATIONS </h3> </button> </a> </center></td> 
					<td><center> <a href="feedback.html"> <button style="background-color:#0099CC; width: 150px; height: 50px"> <h3>  CONTACT US </h3> </button> </a> </center></td>
				</tr>	
							
		</center>	
		</table>
	</center>
	<form name=edit action="edit.php" method="POST" onSubmit="return validate();">
		<fieldset>
				<legend align="left"><font face="Arial"><h2><b>EDIT</h2></b></legend>
				<center>
					<div id="box"> <font face="Comic Sans MS" size=4 color=black> <p> <ul style="list-style-type:circle" align=left>
						<table align="center">
							<tr>
								<td bgcolor="#0099CC"  style= "font-family:Comic Sans MS; border-color:silver; border-style:dotted" >
								<table>
									<br />
									<th colspan=2 style="font-size:200%; text-align:center">  EDIT </th>
									<tr>
										<td> &nbsp </td><td> &nbsp </td>
									</tr>
									<tr>
										<td>
											<b> Name </b>
										</td>
										<td> <?php echo $rs['name']; ?> </td>
									</tr>
									<tr>
										<td>
											<b> Age </b>
										</td>
										<td>
											<input type=text name=eAge size="40" />	
										</td>
									</tr>
									<tr>
										<td>
											<b> Address </b>
										</td>
										<td>
											<input type=text name=eAddress size="40" />
										</td>
									</tr>
									<tr>
										<td>
											<b> Contact </b>
										</td>
										<td>
											<input type=text name=eContact size="40" />
										</td>
									</tr>
									<tr>
										<td>
											<b> Email </b>
										</td>
										<td>
											<input type=text name=eEmail size="40" />
										</td>
									</tr>
									<tr>
										<td> &nbsp </td><td> &nbsp </td>
									</tr>
									<tr>
										<td> &nbsp </td><td> &nbsp </td>
									</tr>
									<tr>
										<td colspan=2>
											<center>
												<input type=submit name=submit value=SUBMIT />
												<input type=reset value="CLEAR" />
											</center>
										</td>
									</tr> 
								</table>
								</td>
							</tr> 
						</table>
					</div>
				</center>																		  
		</fieldset>
	</form>
	
	<center>
	
		<center><img src="image/LOGOS.png" alt= width="200" height="130"  border="0"></center>
		<p> <font face="Arial" <h6> &copy;2015 Fitness Empire. All Rights Reserved  </h6> </font> </p>
	</center>
</body>
</html>
