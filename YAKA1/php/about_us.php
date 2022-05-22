<?php

session_start();

include("config.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- stylesheets -->
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="stylesheet" href="../styles/about_us.css">
  <title>Page | BawBaw.lk</title>
</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="nav-logo">
      <a href="home.php"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
    </div>
    <div class="nav-menu-container">
      <ul class="nav-menu">
        <li><a class="nav-link" href="home.php">Home</a></li>
        <?php
        if (check_login_no_redirect($conn)) {
          echo '<li><a class="nav-link" href="mypets.php">My Pets</a></li>';
          echo '<li><a class="nav-link" href="appointment-new.php">Schedule</a></li>';
        }
        ?>
        <li><a class="nav-link" href="pet advice.php">Pet Advice</a></li>
        <li><a class="nav-link" href="shop.php">Shop</a></li>
        <li><a class="nav-link" href="FAQ.php">Help</a></li>
        <li><a class="nav-link active-link" href="about_us.php">About</a></li>
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

  <div>
    <div class="back">
      <h1 class="head1">
        We Care for Your Pet
      </h1>
    </div>
  </div>

  <div class="position_1">
    <div class="pic">
      <img src="../images/About_us/Vet.jpg" alt="a pet" width="480" height="300">
    </div>
    <div class="position_2">
      <h2 class="header2">WHO WE ARE</h2>
      <p class="para">
        "Lorem ipsum dolor sit amet,<br>
        consectetur adipiscing elit, <br>
        sed do eiusmod tempor incididunt <br>
        ut labore et dolore magna aliqua. <br>
        Ut enim ad minim veniam, <br>
        quis nostrud exercitation ullamco <br>
        laboris nisi <br>
        Lorem ipsum dolor sit amet,<br>
        Lorem ipsum dolor sit amet,<br>
        consectetur adipiscing elit,<br>
        sed do eiusmod tempor incididunt <br>
        ut labore et dolore magna aliqua. <br>
        Ut enim ad minim veniam,
      </p>
    </div>
  </div>
  <div class="rec0">
    <div class="rec1">
      <h2 style="position: absolute; text-align: center; top: 80px; left: 25%;">2000+</h2>
      <p style="position: absolute; text-align: center; top: 130px; left: 10%;">Vet Consultations</p>
    </div>

    <div class="rec2">
      <h2 style="position: absolute; text-align: center; top: 80px; left: 40%;">30</h2>
      <p style="position: absolute; text-align: center; top: 130px; left: 4%;">Qualified Vet Surgeons</p>
    </div>

    <div class="rec3">
      <h2 style="position: absolute; text-align: center; top: 80px; left: 40%;">98%</h2>
      <p style="position: absolute; text-align: center; top: 130px; left: 17%;">Positive Ratings</p>
    </div>
  </div>
  <div class="pic2">
    <img src="../images/About_us/vet_2.jpg" alt="a pet" width="450" height="300">
  </div>
  <div class="position_4">
    <h2 class="h2-1">OUR HISTORY</h2>
    <p class="para-1">
      "Lorem ipsum dolor sit amet,<br>
      consectetur adipiscing elit, <br>
      sed do eiusmod tempor incididunt <br>
      ut labore et dolore magna aliqua. <br>
      Ut enim ad minim veniam, <br>
      quis nostrud exercitation ullamco <br>
      laboris nisi <br>
      Lorem ipsum dolor sit amet,<br>
      Lorem ipsum dolor sit amet,<br>
      consectetur adipiscing elit,<br>
      sed do eiusmod tempor incididunt <br>
      ut labore et dolore magna aliqua. <br>
      Ut enim ad minim veniam,
    </p>
  </div>



  <!-- footer -->

</body>

</html>