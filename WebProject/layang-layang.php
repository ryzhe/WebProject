<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Layang-layang</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="layang-layang.php" method="post">
	<a href="main-menu.php"><img src="back.png" width="40px" height="40px"></a>
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side A : <input type="text" name="sideA">
	Side B : <input type="text" name="sideB"><br>
	Side C : <input type="text" name="sideC">
	Side D : <input type="text" name="sideD"><br>
	Diagonal 1 : <input type="text" name="dig1">
	Diagonal 2 : <input type="text" name="dig2">
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
		$dig1 = $_POST['dig1'];
		$dig2 = $_POST['dig2'];

		$resultA = 0.5 * $dig1 * $dig2;
		$resultC = $sideA + $sideB + $sideC + $sideD;

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>