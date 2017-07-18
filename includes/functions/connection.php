<?php 

	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "facebook_mock";

	$conn = mysqli_connect($server, $username, $password, $db);
         
	// if (!$conn) {
	// 	die("Connection failed: ".mysqli_connect_err());
	// } echo "Connected successfully";
?>