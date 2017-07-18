<?php

	include("includes/functions/getUsers.php");
	getUsers();
	$result = getUsers();
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Facebook Landing Page</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<br>
		<div class="alert alert-success">
			<h4 class="text-success">List of Users</h4>
			<span class="pull-right text-danger"><a href="index.php" title="Go to Home"><i class="fa fa-home">Home</i></a></span>
		</div>
			<div class="row">
				<?php
					// If we have data
					if (mysqli_num_rows($result) > 0) {
							// output the data
							echo "<table class='table table-hover'>
							<tr><th class='text-center'>ID</th>
								<th class='text-center'>First Name</th>
								<th class='text-center'>Surname</th>
								<th class='text-center'>Email</th>
								<th class='text-center'>Birthday</th>
								<th class='text-center'>Sex</th>
							</tr>";
						while ($row = mysqli_fetch_assoc($result)) {
							//print_r($row);
							echo "<tr class='text-center'><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>"
									.$row["surname"]."</td><td>".$row["email"]."</td><td>".$row["birthday"].
									"</td><td>".$row["sex"]."</td></tr>";
						}
					}
					
				?>
			</div>

	</div>

	
	<script src="/javascripts/jquery.min.js" type="text/javascript"></script>
	<script src="/javascripts/bootstrap.min.js" type="text/javascript"></script>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>