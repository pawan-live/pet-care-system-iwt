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
  <link rel="stylesheet" href="../styles/mypets.css" />
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
          echo '<li><a class="nav-link active-link" href="mypets.php">My Pets</a></li>';
          echo '<li><a class="nav-link" href="appointment-new.php">Schedule</a></li>';
        }
        ?>
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
      <h1 class="page-title" style="padding-bottom: 25px;">My Pets</h1>
      <table border="1" class="table">
        <tr>

          <th>Pet Name</th>
          <th>Pet Type</th>
          <th>Breed</th>
          <th>Age</th>
          <th>Gender</th>

          <?php
          //create the database connection
          include_once("config.php");
          $sql = "select * from petdetails";
          if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {


              while ($row = $result->fetch_assoc()) {
                if ($row['pet_type'] === "cat") {
                  $icon = '<i class="fa-solid fa-cat"></i>';
                } else {
                  $icon = '<i class="fa-solid fa-dog"></i>';
                }
                echo "<tr>";

                echo "<td>" . $row['pet_name'] . "</td>";
                echo "<td>" . $icon . " " . $row['pet_type'] . "</td>";
                echo "<td>" . $row['pet_breed'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['pet_gender'] . "</td>";
                echo "</tr>";
              }
            }
          } else {
            echo "no results";
          }

          $conn->close();
          ?>
      </table>
      <!-- <div class="pet-container">
        <div class="column-left">
          <div class="details-wrapper">
            <div class="img-container">
              <img class="pet-img" src="http://placehold.jp/180x180.png" alt="" />
            </div>
            <div class="name-container">
              <p class="pet-name">Scooby</p>
              <i class="fa-solid fa-dog"></i>
              <i class="fa-solid fa-cat" style="display: none"></i>
            </div>
            <div class="breed-container">
              <p class="pet-breed">Dalmation</p>
              <p class="pet-age">, <span id="pet-age">2</span> yrs</p>
            </div>
            <div class="gender-container">
              <p class="pet-gender">Male</p>
              <i id="icon-male" class="fa-solid fa-mars"></i>
              <i id="icon-male" class="fa-solid fa-venus" style="display: none"></i>
            </div>
            <i id="edit-icon" class="icon fa-solid fa-pencil"></i>
          </div>
        </div>

        <div class="column-right">
          <div class="item-group">
            <i class="fa-solid fa-calendar-days"></i>
            <span> Upcoming Appointments</span>
          </div>
          <div class="appt-container">
            <div class="appt-group">
              <p>
                <span id="date">22/08/2022</span>
                <span id="time">6:00 PM</span>
              </p>
              <i class="icon fa-solid fa-pencil"></i>
            </div>
          </div>
          <div class="appt-container">
            <div class="appt-group">
              <p>
                <span id="date">22/08/2022</span>
                <span id="time">6:00 PM</span>
              </p>
              <i class="icon fa-solid fa-pencil"></i>
            </div>
          </div>
          <div class="appt-container">
            <div class="appt-group">
              <p>
                <span id="date">22/08/2022</span>
                <span id="time">6:00 PM</span>
              </p>
              <i class="icon fa-solid fa-pencil"></i>
            </div>
          </div>
        </div>
      </div> -->
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