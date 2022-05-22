<?php

session_start();

include("config.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/checkoutEnd.css">
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="nav-logo">
            <a href="#"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
        </div>
        <div class="nav-menu-container">
            <ul class="nav-menu">
                <li><a class="nav-link active-link" href="#">Home</a></li>
                <li><a class="nav-link" href="appointment-new.php">Schedule</a></li>
                <li><a class="nav-link" href="pet advice.php">Pet Advice</a></li>
                <li><a class="nav-link" href="shop.php">Shop</a></li>
                <li><a class="nav-link" href="FAQ.php">Help</a></li>
                <li><a class="nav-link" href="about_us.php">About</a></li>
                <li><a class="nav-link" href="contact.php">Contact us</a></li>
            </ul>
        </div>

        <div class="nav-buttons">
            <?php
            if (check_login_no_redirect($conn)) {
                echo '<a href="logout.php"><button id="logout-btn" class="btn">Log Out</button></a>';
            } else {
                echo '<a href="login.php"><button id="login-btn" class="btn btn-light">Login</button></a><a href="Register1.php"><button id="reg-btn" class="btn btn-dark">Join Now</button></a>';
            }
            ?>
        </div>
    </nav>
    <!-- content -->
    <section class="load-wrapper">
        <div class="box">
            <div class="align">
                <h2>Processing...</h2><br>
                <img src="../images/checkout/loading-loading-forever.gif" id="loding">
                <br><br>
                <p>You will recive verification email soon.</p><br>
                <a href="../html/index.html">
                    <button class="btn btn-dark">OK</button>
                </a>
            </div>
        </div>
    </section>
</body>

</html>