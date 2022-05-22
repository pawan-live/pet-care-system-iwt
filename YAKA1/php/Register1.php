<?php

session_start();

include 'config.php';
// include 'functions.php';

if (isset($_POST['register'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $phone = $_POST['contact_no'];
  $gender = $_POST['gender'];

  $sql = "insert into user (first_name,last_name,gender,email,password, contact_no)
    values('$first_name', '$last_name', '$gender', '$email', '$pass','$phone')";

  if ($conn->query($sql)) {
    // echo "Your message sent succesefully";
  } else {
    echo "error" . $conn->error;
  }
  $conn->close();

  header("Location: login.php");
  die;
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
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="../styles/style.css" />
  <link rel="stylesheet" type="text/css" href="../styles/Register1.css" />

  <title>Register Form</title>
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
  <div class="load-wrapper">
    <div class="box">
      <h1 class="h1-large">Registration</h1><br>
      <h3 class="h3-large">Owner Info</h3><br>
      <form method="POST">
        <p>Enter your details</p><br>
        <div class="user-details">
          <div class="input-box">
            <!-- <span class="details">First name</span> -->
            <label class="form-label" for="field-first-name">First name</label>
            <input id="first-name" type="text" name="first_name" placeholder="Enter first name.." required />
          </div>
          <div class="input-box">
            <!-- <span class="details">Last name</span> -->
            <label class="form-label" for="field-last-name">Last name</label>
            <input id="field-last-name" type="text" name="last_name" placeholder="Enter last name.." required />
          </div>
        </div>
        <Br>
        <!-- pet gender -->
        <div class="form-div">
          <label class="form-label" for="gender">Gender: </label>
          <select class="form-select" name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <!-- <p>E-mail</p> -->
        <label class="form-label" for="field-email">E-mail</label><br>
        <input id="field-email" type="text" name="email" placeholder="Enter e-mail.." required />
        <br><br>
        <!-- <p>Enter Password</p> -->
        <label class="form-label" for="field-enter-password">Enter Password</label><br>
        <input id="field-enter-password" type="password" placeholder="Enter password.." required /><br>
        <ul>
          <li>Must be at least 6 characters</li>
          <li>Contains letters,numbers & symbols</li>
        </ul>
        </br>
        <!-- <p>Confirm Password</p> -->
        <label class="form-label" for="field-confirm-password">Confirm Password</label><br>
        <input id="field-confirm-password" type="password" name="password" placeholder="Re-enter password.." required />
        <br><br>
        <!-- <p>Contact Number</p> -->
        <label class="form-label" for="tel-no">Contact Number</label><br>
        <div id="tel-no-container">
          <input id="country-code" type="text" placeholder="Country code" value="+94" required />
          <br>
          <input name="contact_no" id="tel-no" type="text" placeholder="" required />
        </div>
        <center>
          <input class="btn btn-dark" type="submit" value="Register" name="register">
        </center>
      </form>
    </div>
  </div>
</body>

</html>