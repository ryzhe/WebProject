<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <title>Main-menu</title>
</head>

<body>
    <br><br><br>
     <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose What You Want to Calculate
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a href="lingkaran.php"> Lingkaran </a></li>
        <li><a href="persegi.php"> Persegi </a></li>
        <li><a href="persegi-panjang.php"> Persegi Panjang </a></li>
        <li><a href="belah-ketupat.php"> Belah Ketupat </a></li>
        <li><a href="segitiga-siku.php"> Segitiga Siku-siku</a></li>
        <li><a href="segitiga-sisi.php"> Segitiga Sama Sisi</a></li>
        <li><a href="trapesium.php"> Trapesium </a></li>
        <li><a href="jajar-genjang.php"> Jajar Genjang </a></li>
        <li><a href="layang-layang.php"> Layang-layang </a></li>
        </ul>
    </div> 
</body>

</html>
