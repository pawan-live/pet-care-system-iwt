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
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Check Out</title>
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/checkout.css">


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
  </nav> <!-- content -->
  <main>
    <div class="main-wrapper">
      <div class="col-left">
        <h1 class="h1-large1">Shipping Details</h1>
        <div class="input-field">
          <label for="">Name: </label><br>
          <input class="form-input-field" type="text" id="username">
        </div><br>
        <div class="input-field">
          <label for="">Address: </label><br>
          <input class="form-input-field" type="text" id="address">
        </div><br>
        <div class="input-field">
          <label for="">Contact No.: </label><br>
          <input class="form-input-field" type="text" id="contact">
        </div> <br>
      </div>
      <div class="col-right">
        <h1 class="h1-large1">Payment Method</h1>
        <form>
          <div class="pay-mtd">
            <div class="input-pay">
              <input type="radio" id="marg">
              <i class="fa-brands fa-cc-visa"></i>
            </div>
            <div class="input-pay">
              <input type="radio" id="marg">
              <i class="fa-brands fa-cc-apple-pay"></i>
            </div>
            <div class="input-pay">
              <input type="radio" id="marg">
              <i class="fa-brands fa-cc-mastercard"></i>
            </div>
          </div><br>
        </form>
        <div class="input-field">
          <label for="">Card Number: </label><br>
          <input class="form-input-field" type="text" id="card-number">
        </div><br>
        <div class="input-field">
          <label for="">Name On Card: </label><br>
          <input class="form-input-field" type="text" id="card-name">
        </div><br>
        <div class="input-field-flex">
          <div class="input-field">
            <label for="">Expire Date: </label><br>
            <input class="form-input-field" type="text" id="card-name">
          </div>
          <div class="input-field">
            <label for="">CVV: </label><br>
            <input class="form-input-field" type="text" id="card-name">
          </div>
        </div><br>
        <div class="check">
          <input type="checkbox" name="pay" id="checkbox">
          <label for="" id="check-lbl"> Save this Payment </label><br>
        </div>
        <a href="checkoutEnd.php">
          <button class="btn btn-dark">Pay Now</button>
        </a>
      </div>
    </div>
  </main>

  <!-- footer -->
  <footer>
    <div class="footer-container">
      <div id="footer-sec-1" class="footer-img-container">
        <a href="#"> <img src="../images/footer/footer logo.png" alt="" /> </a>
      </div>
      <div id="footer-sec-2" class="footer-links-container flex column">
        <p class="h2-small footer-title">Navigation</p>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="home.php">Home</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="appointment-new.php">Schedule</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="pet advice.php">Advice</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="FAQ.php">Support</a>
        </div>
      </div>
      <div id="footer-sec-3" class="footer-links-container flex column">
        <p class="h2-small footer-title">Other Links</p>

        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="shop.php">Shop</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="contact.php">Contact</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Carreers</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Youtube</a>
        </div>
      </div>
      <div id="footer-sec-4" class="footer-app-container flex column">
        <p class="h2-small footer-title">Download the App</p>
        <a href="#">
          <img class="footer-app-img" src="../images/footer/app-store-download.png" alt="" />
        </a>
        <a href="#">
          <img class="footer-app-img" src="../images/footer/play-store-download.png" alt="" />
        </a>
      </div>
    </div>
    <div class="footer-text">Copyright 2022 Group 09 | Flying Monkeys</div>
  </footer>

</body>

</html>