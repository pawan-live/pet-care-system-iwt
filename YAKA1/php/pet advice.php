<?php

session_start();

include("config.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>pet advice </title>
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/Header.css">
  <link rel="stylesheet" href="../styles/petadvice.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <main></main>

  <div class="sub-header">
    <h3>online pet health advice</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <br> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.





  </div>
  </div>
  <section class="advise">
    <h3>Dog Advice</h3>
    <div class="container">
      <div class="dog">
        <button data-modal-target="#modal" onclick="loaddata('Dhealth')"> <img src="../images/Pet advice/1.jpg.jpg" alt=""></button>
        <p>Health & wellness</p>
      </div>
      <div class="dog">
        <button data-modal-target="#modal" onclick="loaddata('Dlifestyle')"> <img src="../images/Pet advice/2.jpg.jpeg" alt=""></button>
        <p>Lifestyle</p>
      </div>
      <div class="dog">
        <button data-modal-target="#modal" onclick="loaddata('Dstress')"><img src="../images/Pet advice/3.jpg.jpg" alt=""></button>
        <p>Stress & anxiety</p>
      </div>

    </div>


    <div class="modal" id="modal">
      <div class="modal-header">
        <div class="title">
          <h4>More info</h4>
        </div>
        <button data-close-button class="close-button">&times;</button>
      </div>
      <div class="modal-body">


        <div class="image">
          <img id="image1" src="" alt="">
        </div>
        <div class="content" id="para">

        </div>

      </div>

    </div>
    <div class="active" id="overlay"></div>


  </section>
  <section class="advise">
    <h3>Cat Advice</h3>
    <div class="container">
      <div class="cat">
        <button data-modal-target="#modal" onclick="loaddata('Chealth')"> <img src="../images/Pet advice/4.jpg.jpg" alt=""></button>
        <p>Health & wellness</p>
      </div>
      <div class="cat">
        <button data-modal-target="#modal" onclick="loaddata('Clifestyle')"> <img src="../images/Pet advice/5.jpg.jpg" alt=""></button>
        <p>Lifestyle</p>
      </div>
      <div class="cat">
        <button data-modal-target="#modal" onclick="loaddata('Cstress')"> <img src="../images/Pet advice/6.jpg.jpg" alt=""></button>
        <p>Stress & anxiety</p>
      </div>

    </div>

  </section>

  <div class="sub-footer">
    <h3>Can't find advise you are looking for?</h3>
    <p>We have proffetional vets for help you</p>
    <a href="appointment-new.php"><button class="hero-btn">book an appointment</button></a>
  </div>
  </main>
  <footer>
    <div class="footer-container">
      <div id="footer-sec-1" class="footer-img-container">
        <a href="#"> <img src="http://placehold.jp/300x160.png" alt="" /> </a>
      </div>
      <div id="footer-sec-2" class="footer-links-container flex column">
        <p class="h2-small footer-title">Navigation</p>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 1</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 2</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 3</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 4</a>
        </div>
      </div>
      <div id="footer-sec-3" class="footer-links-container flex column">
        <p class="h2-small footer-title">Other Links</p>

        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 1</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 2</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 3</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Link 4</a>
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
  <script src="../java script/petadvicemore.js"></script>

</body>

</html>