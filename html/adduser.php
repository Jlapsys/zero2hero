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
	
	//PROBABLY SHOULD CHECK FOR BLANK FIELDS AND THROW ERRORS
	if( empty($_POST['username']) || empty($_POST['password']))
	{
		die("Username or Password can not be blank");
	}

	
	//CHECK HERE FOR EXISTING USER
	$result = $conn->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	
	if ($result->num_rows>0)
	{?>
		<h1 class="test">USER ALREADY EXISTS</h1>
		<div style="text-align: center">
		<a href="/index.html"><button>Logout</button></a>
		</div>
		<?php
		die();
	}
	
	else
	{
		$conn->query("INSERT INTO `user`(`userid`, `username`, `password`, `salt`) VALUES (NULL,'$username','$password','')");
		?><h1 class="test">User has been added.</h1>
		<div style="text-align: center">
		<a href="/index.html"><button>Logout</button></a>
		</div><?php
	}?>
	</body></html>
	<?php
	$conn->close();
?>
