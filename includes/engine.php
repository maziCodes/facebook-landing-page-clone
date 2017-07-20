<?php

	class engine {
		public function __construct($conn) {
			$this->conn = $conn;
		}

		// Login function
		public function login($email, $password){
			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			// query db
			$result = $this->conn->query($sql);
			// parse $result to assoc array
			$details = $result->fetch_assoc();
			// validate login
			if ($result->num_rows>0){
				session_start();
				while($row = $details){
					$_SESSION["user_id"] = $row['id'];
					$_SESSION["user_name"] = $row['firstName'];
					break;
				}
				header('Location:http://localhost/facebook-landing-page/successpage.php');
			}
			else { $login = "Email or Password incorrect";
				session_start();
				$_SESSION["error"] = "Email or password incorrect!";
				header('Location:http://localhost/facebook-landing-page/index.php');
			}
		}

		// Register function
		public function registerUsers($firstName,$surname,$email,$password,$birthday,$sex){

				// Create "userDetails" array
				$userDetails= array(
						'firstName' => $firstName,
						'surname' => $surname,
						'email' => $email,
						'password' => $password,
						'birthday' => $birthday,
						'sex' => $sex
					);
				

				
			$query = "INSERT INTO users (firstName, surname, email, password, birthday, sex ) VALUES ('$userDetails[firstName]','$userDetails[surname]', '$userDetails[email]','$userDetails[password]','$userDetails[birthday]', '$userDetails[sex]')";

			if ( mysqli_query($this->conn, $query) ) {
				echo "<div class='alert alert-success'><h5>Account Successfully Created. View details <a href='users.php'>here</a></h5></div>";
			} 
				else { echo "Error: ". $query. "<br>". mysqli_error($this->conn);
				}
		}

		// Get users function
		public function getUsers(){
			$query = "SELECT * FROM users";
			$result = $this->conn->query($query);
			return $result;
		}
	}

?>