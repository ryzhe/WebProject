<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Circle</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
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

	if(isset($_POST['submit'])){
		$rad = $_POST['rad'];
		$dia = $_POST['dia'];

		if ($rad != 0 && $dia == 0) {
			$result = $phi * ($rad * $rad);
			echo "Your result is : $result";
		}

		elseif ($dia != 0 && $rad == 0) {
			$diaDevide = $dia / 2;
			$result = $phi * ($diaDevide * $diaDevide);
			echo "Your result is : $result";
		}
	}

?>