<?php
class Facebook{
	public function __construct($conn){
		$this->conn = $conn;
	}
	public function login($email, $password){
		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$result = $this->conn->query($sql);
		$details = $result->fetch_assoc();
		if($result->num_rows>0){
			echo "Welcome, ".$details['firstName'];
		}
		else{
			echo "Email or password incorrect!";
		}
	}

	public function register(){
		echo "We dey hia!";
	}
}
