<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Segitiga Siku-siku</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="segitiga-siku.php" method="post">
	<a href="main-menu.php"><img src="back.png" width="40px" height="40px"></a>
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side A : <input type="text" name="sideA"><br>
	Side B : <input type="text" name="sideB"><br>
	Side C : <input type="text" name="sideC"><br>
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$sideA = $_POST['sideA'];
		$sideB = $_POST['sideB'];
		$sideC = $_POST['sideC'];
		
		
		$resultA = ($sideA * $sideB) / 2;
		$resultC = $sideA + $sideB + $sideC;

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>