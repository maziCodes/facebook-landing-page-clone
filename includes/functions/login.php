<?php
	// External Files
	require ("connection.php");

	function login($email,$password) {
		global $conn;

		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($conn, $query);


		//echo "here";

		if (mysqli_num_rows($result) > 0){
			echo "This account don't exist. Please, signup!";	
		} 
		// else if (mysqli_num_rows($result) > 0) {
		// 	echo "welcome!";
		// } 
		// else {echo "This is a suspicious Activity!";}
	}

?>