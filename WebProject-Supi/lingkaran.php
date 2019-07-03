<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Circle</title>
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
			background-image: url("image/BGSNOW.jpg");

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

<body>
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
						<a href="reset-password.php" class="btn btn-warning">Change Your Password</a>
						<a href="logout.php" class="btn btn-danger">Sign Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="lingkaran.php" method="post">
		<a href="main-menu.php"><img src="back.png" width="40px" height="40px"></a>
		<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
		<p>We are using 3.142 as π (Phi)</p>
		Radius &nbsp &nbsp &nbsp: <input type="text" name="rad" placeholder="Left it '0' if you doesn't have Radius" size="50px"><br><br>
		Diameter : <input type="text" name="dia" placeholder="Left it '0' if you doesn't have Diameter" size="50"><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>

</html>


<?php

$phi = 3.142;

if (isset($_POST['submit'])) {
	$rad = $_POST['rad'];
	$dia = $_POST['dia'];

	if ($rad != 0 && $dia == 0) {
		$result = $phi * ($rad * $rad);
		echo "Your result is : $result";
	} elseif ($dia != 0 && $rad == 0) {
		$diaDevide = $dia / 2;
		$result = $phi * ($diaDevide * $diaDevide);
		echo "Your result is : $result";
	}
}

?>