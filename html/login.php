<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel = "stylesheet" type = "text/css" href = "lab3.css">
	</head>
<body>
<?php
	include "dbconnect.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = $conn->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	
	
	//if (($result->num_rows>0) && (($username == "Administrator") ||($username == "administrator")))
	//{
	//	header('Location: /admin.php');    
	//}
	
	
	if ($result->num_rows>0)
	{?>
		<h1 class="test">SUCCESS!</h1>
		<div style="text-align: center">
		<a href="member-area.html"><button>Logout</button></a>
		</div>
<?php
		
		
	}
	
	else
	{
		die('Either the username or password was incorrect.');
	}?>
	</body></html>
<?php
	$conn->close();
?>
