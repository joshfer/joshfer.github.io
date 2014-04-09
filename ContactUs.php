
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
	if($_POST['Name'] && $_POST['Email'])
	{
		// Create DB
    	$connect = mysql_connect();	
	
		$db_query = "CREATE DATABASE IF NOT EXISTS LogoSubs";
	
		mysqli_query($connect, $db_query);
	
		// Create Table Subscribers
		$table_query = "CREATE TABLE IF NOT EXISTS Subscribers(Name VARCHAR(50), Email VARCHAR(50))";
		
		mysqli_query($connect, $table_query);
	
		// Insert into Table Subscribers
		$insert = "INSERT INTO Subscribers(Name, Email)
		VALUES ('$_POST[Name]','$_POST[Email]')";
	
		if (!mysqli_query($connect, $insert))
		{
			echo "Cannot insert into database";
		}
	
		mysqli_close($connect);
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./CSS/ContactUs.css"/>

		<title> Contact Us </title>
	</head>

	<body>
		
		<div id="container">
			<div id="head">
				<p id="pDetails"> Need to talk to someone? Call us on <strong>03 9754 2677</strong> </p>
			</div>
			
			<table>
				<tr>
					<td id="list">
						<div id="contentlist">
							<ul>
								<li> <h3> Contact Us </h3> </li>
								<li> <p> Logo design </p></li>
								<li> <p> Corporate brand design </p></li>
								<li> <p> Brand identity design </p></li>
								<li> <p> Stationary design </p></li>
								<li> <p> Our terms </p></li>
							</ul>
						</div>
					</td>
					<td id="form">
						<div id="subscribe">
							<form action="ContactUs.php" method="post">
								<p class="label"> Name </p>
								<input type="text" name="Name"> <br/>
								<p class="label"> Email </p>
								<input type="text" name="Email">	<br/>	
								<button type="submit" id="btnSubmit"> SUBSCRIBE NOW </button>
							</form>
						</div>
					</td>
				</tr>

			</table>
			
			<div id="footer" align="center">
				<img src="./Images/Guerrilla.jpg" alt="Guerrilla Independent"/>
			</div>
		</div>
		
	</body>
</html>
