<?php
/* CODE FROM https://www.w3schools.com/php/php_mysql_connect.asp */
	$servername = "localhost";
	$username = "root";
	$password = "csuncit480root";
	$db = 'Zero2HeroDB';
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 

	echo "Connected successfully";
?>
<br></br>
