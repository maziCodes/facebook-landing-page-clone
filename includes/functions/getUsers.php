<?php
	// External file
	include("connection.php");

	function getUsers(){
		// declare a global variable
		global $conn;

		$query = "SELECT * FROM users";
		$result = mysqli_query($conn, $query);
		return $result;
	}

?>