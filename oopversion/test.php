<?php
include ("conn.php");
include ("engine.php");
$email = "Balo@west.com";
$pass = "2345big";

$myengine = new Facebook($conn);

$myengine->login($email, $pass);

