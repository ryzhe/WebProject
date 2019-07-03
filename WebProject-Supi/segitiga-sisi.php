<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Segitiga Sama Sisi</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="segitiga-sisi.php" method="post">
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Side : <input type="text" name="side"><br>
	Tall : <input type="text" name="tall"><br>
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$side = $_POST['side'];
		$tall = $_POST['tall'];
		
		$resultA = ($side * $tall) / 2;
		$resultC = $side + $side + $side;

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>
