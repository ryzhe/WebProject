<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Belah Ketupat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="belah-ketupat.php" method="post">
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side : <input type="text" name="side">
	Diagonal 1 : <input type="text" name="diag1">
	Diagonal 2 : <input type="text" name="diag2">
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$side = $_POST['side'];
		$diag1 = $_POST['diag1'];
		$diag2 = $_POST['diag2'];
		
		
		$resultA = 0.5 * $diag1 * $diag2;
		$resultC = 4 * $side;

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>
