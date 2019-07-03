<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
    <title>Main-menu</title>
</head>

<body class="bg2">
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
    <br><br><br>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose What You Want to Calculate
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="lingkaran.php"> Lingkaran </a></li>
        </ul>
    </div>
</body>

</html>