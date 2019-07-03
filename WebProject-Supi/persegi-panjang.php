<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Persegi Panjang</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<form action="persegi-panjang.php" method="post">
	<a href="index.php"><img src="home.png" width="28px" height="31px"></a>
	<p>Caption later</p>
	Width : <input type="text" name="width">
	Height : <input type="text" name="height">
	<input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>

<?php  

	if (isset($_POST['submit'])) {
		$width = $_POST['width'];
		$height = $_POST['height'];
		
		
		$resultA = $width * $height;
		$resultC = 2 * ($width + $height);

		echo "Your Area Result is : $resultA";
		echo "<br>";
		echo "Your Circumference Result is : $resultC";
	}

?>
