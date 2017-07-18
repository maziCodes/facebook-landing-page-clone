<?php
	// error_reporting(0);
	// Include external files
	include("includes/functions/connection.php");
	include("includes/functions/register.php");

	if (isset ($_POST["create"])){

		if(empty($_POST["sex"])) {
			$sexError = "Please select one!";
		} 
		else {
			// call the registerUsers function
			registerUsers($_POST["firstName"], $_POST["surname"], $_POST["email"],  $_POST["password"], $_POST["birthday"], $_POST["sex"] );
		}
	
	}
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
	<div>
		<div class="col-md-12 col-sm-12 col-lg-12 _header">
			<header id="header">
				<div>
					<div class="pull-left">
						<h1>
							<a href="#" title="Facebook Clone">
								<!-- <span class="logo"><img height="100" src="assets/img/facebook-logo.png" alt="facebook logo"><span> -->
							</a>
						</h1>
						
					</div>
					
					<form class="form-inline _form pull-right">
						<div class="form-group">
							<label class="label-a" title="Enter email">Email</label>
							<input class="form-control input-sm form-a" type="email" name="email">
						</div>
						<div class="form-group">
							<label for="password" class="label-a" title="Enter password">Password</label>
							<input class="form-control input-sm form-a" type="password" id="password" name="password">
						</div>
						<div class="form-group">
							<input class="button btn btn-sm" type="submit" name="submit" title="Log in to your account" value="Log In">
						</div>
						<a href="#" title="Get new password"><div class="muted">Forgotten Password?</div></a>
					</form>
				</div>		
			</header><!-- /header -->
		</div>

		<!-- Main section -->
		<section class="container-fluid main">
			<div class="">
				<div class="col-md-4 col-sm-5 col-lg-5 col-lg-offset-1">
					<h3 class="greeting">Facebook helps you connect and share with the people in your life.</h3>
					<img src="assets/img/connected.png" alt="connecting different people around the globe">
					
				</div>
					
				<!-- Sinup Form -->
				<div class="col-md-4 col-sm-5 col-lg-5 _forma">
					<div class="">
						<span class="text-success"><?php  ?></span>
						<h2 class="greeting2">Create an account</h2>
						<p class="greeting3">It's free and always will be.</p>
						<form action="" method="post">
							<div>
								<div class="form-group _formb">
									<input type="text" class="form-control input-lg" name="firstName" placeholder="First Name" required>
								</div>
								<div class="form-group _formb">
									<input type="text" class="form-control input-lg" name="surname" placeholder="Surname" required>
								</div>
								<div class="form-group _formc">
									<input type="text" class="form-control input-lg" name="email" placeholder="Email Address" required>
								</div>
								<div class="form-group _formc">
									<input type="password" class="form-control input-lg" name="password" placeholder="New Password" required>
								</div>
								<p class="birthday-text">Birthday</p>
								<div>
									<input type="date" class="birthday" name="birthday" required>
									<div class="_birth"><a href="#"><small>Why do I need to provide my<br> date of birth?</small></a></div>
								</div>
								<small class="text-danger"><strong><?php if(!empty($sexError)){echo $sexError;} ?></strong></small>
								<div class="user-sex">
									<input type="radio" name="sex" value="F" class="user-sex-a"><span>Female</span>
									<input type="radio" name="sex" value="M" class="user-sex-a"><span>Male</span>
								</div>
								<p class="terms">By clicking Create an account, you agree to our <a href="#" id="terms-link" target="_blank" rel="nofollow">Terms</a> and confirm that you have read our <a href="#" id="privacy-link" target="_blank" rel="nofollow">Data Policy</a>, including our <a href="#" id="cookie-use-link" target="_blank" rel="nofollow">Cookie Use Policy</a>. You may receive SMS message notifications from Facebook and can opt out at any time.</p>
							</div>
							<div>
								<button type="submit" name="create" class="btn btn-lg create-btn">Create an account</button>
							</div>
							<p class="text-muted "><a href="#"><strong>Create a Page</strong></a> for a celebrity, band or business.</p>
						</form>
					</div> <!-- /Sinup Form -->
					
				</div>
			</div>

		</section><!-- /section -->
	</div>
	<footer class="col-md-10 col-sm-10 col-lg-10 col-lg-offset-1">
		<ul class="footer-item">
			<li>English (UK)</li>
			<li><a href="#">Hausa</a></li>
			<li><a href="#">Français (France)</a></li>
			<li><a href="#">Português (Brasil)</a></li>
			<li><a href="#">Español</a></li>
			<li><a href="#">العربية</a></li>
			<li><a href="#">Bahasa</a></li>
			<li><a href="#">Indonesia</a></li>
			<li><a href="#">Deutsch</a></li>
			<li><a href="#">日本語</a></li>
			<li><a href="#">Italiano</a></li>
			<li><a href="#">हिन्दी</a></li>
			<li><a href="#"><button type="button" class="btn btn-sm btn-default">+</button></a></li>
		</ul>
		<div class="hori"></div>
		<ul class="footer-item-a">
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Log In</a></li>
			<li><a href="#">Mobile</a><li>
			<li><a href="#">Find Friends</a></li>
			<li><a href="#">Pages</a></li>
			<li><a href="#">Help</a></li>
		</ul>
		<div class="hori"></div>
		<ul class="footer-item-c">
			<li><a href="#">Messenger</a></li>
			<li><a href="#">Facebook Lite</a></li>
			<li><a href="#">People</a></li>
			<li><a href="#">Places</a></li>
			<li><a href="#">Games</a></li>
			<li><a href="#">Locations</a></li>
			<li><a href="#">Celebrities</a></li>
			<li><a href="#">Marketplace</a></li>
			<li><a href="#">Groups</a></li>
			<li><a href="#">Recipes</a></li>
			<li><a href="#">Moments</a></li>
			<li><a href="#">Instagram</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Create Advert</a></li>
			<li><a href="#">Create Page</a></li>
			<li><a href="#">Developers</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="#">Cookies</a></li>
			<li><a href="#">AdChoices</a></li>
			<li><a href="#">Terms</a></li>
		</ul>
		<div class="copyright">
			<p>Facebook © 2017</p> <span>Made with <i class="fa fa-heart text-danger"></i> by Brist</span>
		</div>
	</footer>

	<script src="/javascripts/jquery.min.js" type="text/javascript"></script>
	<script src="/javascripts/bootstrap.min.js" type="text/javascript"></script>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>