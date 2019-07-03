<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
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
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="main-menu.php" class="btn btn-primary">Go To Main Program</a>
        <a href="reset-password.php" class="btn btn-warning">Change Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>

</html>