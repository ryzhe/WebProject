<?php  

	// Initialize the session
session_start();
 
	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
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
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
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