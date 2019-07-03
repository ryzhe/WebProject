<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Trapesium</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="trapesium.php" method="post">
	<a href="main-menu.php"><img src="back.png" width="40px" height="40px"></a>
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side A : <input type="text" name="sideA">
	Side B : <input type="text" name="sideB"><br>
	Side C : <input type="text" name="sideC">
	Side D : <input type="text" name="sideD"><br>
	Tall : <input type="text" name="tall"><br>
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$sideA = $_POST['sideA'];
		$sideB = $_POST['sideB'];
		$sideC = $_POST['sideC'];
		$sideD = $_POST['sideD'];
		$tall = $_POST['tall'];
		
		$resultA = 0.5 * ($sideA + $sideC) * $tall;
		$resultC = $sideA + $sideB + $sideC + $sideD;

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>