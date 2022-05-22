<?php

session_start();

include("config.php");
include("functions.php");

?>

<!DOCTYPE html>
<html>

<head>

  <title>Contact us</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/Header.css">
  <link rel="stylesheet" href="../styles/contactus.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="nav-logo">
      <a href="home.php"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
    </div>
    <div class="nav-menu-container">
      <ul class="nav-menu">
        <li><a class="nav-link " href="home.php">Home</a></li>
        <?php
        if (check_login_no_redirect($conn)) {
          echo '<li><a class="nav-link" href="mypets.php">My Pets</a></li>';
          echo '<li><a class="nav-link" href="appointment-new.php">Schedule</a></li>';
        }
        ?>
        <li><a class="nav-link" href="pet advice.php">Pet Advice</a></li>
        <li><a class="nav-link" href="shop.php">Shop</a></li>
        <li><a class="nav-link" href="FAQ.php">Help</a></li>
        <li><a class="nav-link" href="about_us.php">About</a></li>
        <li><a class="nav-link  active-link" href="contact.php">Contact us</a></li>
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

  <div class="sub-header">

    <h1>Contact us</h2>

  </div>



  <main>
    <div class="main-wrapper">
      <h2>Have some questions </h2>

      <div class="row">

        <div class="contact-colum">
          <h3>Contact information</h3>
          <div>
            <i class="fa fa-phone"></i>
            <h3>0112152125</h5>
          </div>
          <div>
            <i class="fa fa-envelope-o"></i>
            <h3>info@bawbaw.lk</h5>
          </div>
          <div>
            <i class="fa fa-home"></i>
            <h3>No.75,main street</h5>
          </div>
          <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>




          </div>

        </div>

        <div class="messages">
          <h3>Send a message</h3>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" placeholder="First Name" name="Fname" id="FN">
            <input type="email" placeholder="Enter your email" name="Email" id="E">
            <textarea name="MSG" id="" cols="30" rows="10" placeholder="message"></textarea>

            <input class="btn btn-dark" type="submit" id="SUB" name="btnSubmit">
          </form>
        </div>
      </div>
      <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0330763713955!2d79.9165568146895!3d6.886641595023696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a082dd9517b%3A0x8f882471a05f7a5a!2sParliment%20building%2C%20Sri%20Jayawardenepura%20Kotte!5e0!3m2!1sen!2slk!4v1651766656611!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>

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
<?php
if (isset($_POST["btnSubmit"])) {


  $name = $_POST['Fname'];
  $Email = $_POST['Email'];
  $message = $_POST['MSG'];

  // include database connection file
  require_once("config.php");

  //insert the user data

  $sql = "INSERT INTO contactusdetails(name,email,message) VALUES('$name','$Email','$message')";

  if ($conn->query($sql)) {
    echo "Your message sent succesefully";
  } else {
    echo "error" . $conn->error;
  }
  $conn->close();
}
?>