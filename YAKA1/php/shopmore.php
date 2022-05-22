<?php

session_start();

include("config.php");
include("functions.php");

?>

<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="../styles/shop2.css">
  <title>header</title>
  <link rel="stylesheet" href="../styles/Header.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/shop.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/shop-new.css" />


</head>

<body>

  <div class="main">

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
    <main>

      <div class="main-wrapper">
        <section class="sub-header">

          <div class="search-section">
            <form method="post" action="search.php">
              <div class="flex row">
                <div class="search-container">
                  <i class="icon fa-solid fa-magnifying-glass"></i>
                  <input class="search-bar" type="text" name="shopsearch" />
                  <button id="shop-search-btn" class="btn searchbar-btn">
                    Search
                  </button>
                </div>
              </div>
            </form>

            <!-- categories -->
            <div class="cat-container">
              <div class="cat">
                <img id="img-cat-1" src="http://placehold.jp/40x40.png" alt="" />
                <a href='shopmore.php? type=catFood'>
                  <p id="cat-1" class="cat-title">Cat Food</p>
                </a>
              </div>
              <div class="cat">
                <img id="img-cat-1" src="http://placehold.jp/40x40.png" alt="" />
                <a href='shopmore.php? type=dogFood'>
                  <p id="cat-1" class="cat-title">Dog Food</p>
                </a>
              </div>
              <div class="cat">
                <img id="img-cat-1" src="http://placehold.jp/40x40.png" alt="" />
                <a href='shopmore.php? type=Medical'>
                  <p id="cat-1" class="cat-title">Medical</p>
                </a>
              </div>
            </div>
            <!-- tags container -->
            <div class="tags-container">
              <div class="btn searchbar-tag">Supplements</div>
              <div class="btn searchbar-tag">Cat Food</div>
              <div class="btn searchbar-tag">Cat Food</div>
              <div class="btn searchbar-tag">Dog Food</div>
              <div class="btn searchbar-tag">Nutrition</div>
              <div class="btn searchbar-tag">Nutrition</div>
              <div class="btn searchbar-tag">Supplies</div>
              <div class="btn searchbar-tag">Supplies</div>
              <div class="btn searchbar-tag">Supplies</div>
              <div class="btn searchbar-tag">Supplies</div>
              <div class="btn searchbar-tag">Supplies</div>
            </div>
          </div>
          <hr>
          <div class="main2">
            <?php
            require 'config.php';

            $itemname = $_GET["type"];


            $sql = "select * from petstore where type like '%$itemname%'";

            if ($result = $conn->query($sql)) {
              if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {
                  echo "<div style ='  margin-bottom:30px ;
            padding-bottom: 45px; 
            padding-top : 50px;'class='alb'>
              <a href='item.php? name={$row["name"]}'><img src='{$row["photo"]}'></a>
              <div class = 'alb'>
              <h4>{$row["name"]}</h4>
              <h5>{$row["price"]}</h5></div>
              </div>";
                }
              }
            } else {
              echo "no results";
            }

            $conn->close();

            ?>
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

</body>

</html>