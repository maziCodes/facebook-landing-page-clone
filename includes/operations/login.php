<?php
	// error_reporting(0);
	// Include external files
	require ("../connection.php");
	require ("../engine.php");
	// instanciate of engine class
	$myEngine = new engine($conn);
	
	if (isset ($_POST["create"])){

		if(empty($_POST["sex"])) {
			$sexError = "Please select one!";
		} 
		else {
			
			// call the registerUsers function
			$myEngine->registerUsers($_POST["firstName"], $_POST["surname"], $_POST["email"],  $_POST["password"], $_POST["birthday"], $_POST["sex"] );
		}
	
	}

	if (isset ($_POST["login"])) {

		if (empty($_POST["email"]) && empty($_POST["password"])) {
			$loginError = "Please enter your Login details!";
		} 
			else if (empty($_POST["email"])) {
			$loginError = "Please enter your Email!";
		} 
			else if (empty($_POST["password"])) {
			$loginError = "Please enter your Password!";
		} 
			else {
			$login = $myEngine->login($_POST["email"], $_POST["password"]);
		}
	}

?>