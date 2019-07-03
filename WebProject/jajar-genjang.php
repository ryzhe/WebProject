<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Jajar Genjang</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="jajar-genjang.php" method="post">
	<a href="main-menu.php"><img src="back.png" width="40px" height="40px"></a>
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side A : <input type="text" name="sideA">
	Side B : <input type="text" name="sideB">
	Tall : <input type="text" name="tall">
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$sideA = $_POST['sideA'];
		$sideB = $_POST['sideB'];
		$tall = $_POST['tall'];

		$resultA = $sideA * $tall;
		$resultC = 2 * ($sideA * $sideB);

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>