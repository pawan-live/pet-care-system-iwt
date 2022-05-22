<?php

session_start();

include 'config.php';
include 'functions.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];


  $query = "select * from user where email = '$email' limit 1";

  $result = mysqli_query($conn, $query);

  if ($result) {
    if ($result && mysqli_num_rows($result) > 0) {
      $user_data = mysqli_fetch_assoc($result);
      if ($user_data['password'] === $password) {
        $_SESSION['email'] = $user_data['email'];
        header("Location: home1.php");
        die;
      }
      echo "Invalid login credentials";
    } else {
      echo "Invalid login credentials";
    }
  }

  // if ($conn->query($sql)) {
  //   // echo "Your message sent succesefully";
  // } else {
  //   echo "error" . $conn->error;
  // }
  // $conn->close();
}
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
  <link rel="stylesheet" href="../styles/login.css" />
  <title>Login Page</title>
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
  <!-- Login -->
  <div class="loginbox">
    <h1 class="h1-large">Login Here</h1>
    <form method="POST">
      <p>E-mail</p>
      <input type="text" name="email" placeholder="Enter e-mail.." required />
      <p>Password</p>
      <input type="password" name="password" placeholder="Password.." required />
      <input class="btn btn-dark" type="submit" name="submit" value="Log In"><br />
      <!-- <input class="btn btn-light" type="submit" name="sub2" value="Sign In With Google"> -->
      <br /><br />
      <a href="">Forgot password ?</a> <br /><br />
      <a href="Register1.php">I don't have an acccount</a>
    </form>
  </div>
</body>

</html>