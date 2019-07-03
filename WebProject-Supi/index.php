<?php

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	header("location: welcome.php");
	exit;
}

// Include config file
require_once "config.php";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>HomePage</title>
	<link rel="stylesheet" href="bootstrap.css">
	<style type="text/css">
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 350px;
			padding: 20px;
		}

		.bg1 {
			/* The image used */
			background-image: url("https://images.unsplash.com/photo-1511989238157-640eebdb713a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80");

			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.bg2 {
			/* The image used */
			background-image: url("image/math-background-design-clipart-1.jpg");

			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body class="bg2">
	<div class="top-header">
		<div class="row bg1 jumbotron">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div align='center' class="academy-logo">
					<a href="index.php"><img src="image/logo.png" alt=""></a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="header-content d-flex align-items-center justify-content-between">

					<div align='right' class="login-content">
						<a href="login.php" class="btn btn-primary">Login</a>
						<a href="register.php" class="btn btn-warning">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<h1 align='center'>Welcome to HITUNG.in</h1>
	<h5 align='center'><u><i>An Application for Calculating Circumference and Area of Two-dimentional Figure</h5></i></u>
	<br>
	<p align="center">
		This application is made for your need for calculating two-dimensional figure more easier<br>
		Maybe our application isn't 100% accurate as your expected, but we try to give you the best result.
	</p>

	<div align="center">
		<a href="login.php" class="btn btn-primary">Login to Your Account</a>
		<a href="register.php" class="btn btn-warning">Create New One</a>
	</div>

</body>

</html>