<?php

include 'config.php';

if (isset($_POST['register'])) {
  $pet_name = $_POST['pet_name'];
  $pet_type = $_POST['pet_type'];
  $pet_breed = $_POST['pet_breed'];
  $age = $_POST['age'];
  $pet_gender = $_POST['pet_gender'];

  $sql = "insert into petdetails (pet_name,pet_type,pet_breed,age,pet_gender)
  values('$pet_name', '$pet_type', '$pet_breed', '$age', '$pet_gender')";

   if($conn->query($sql))
 {
    echo "Your message sent succesefully";
 }
else{
    echo "error".$conn->error;
}
$conn->close();

 
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
  <link rel="stylesheet" href="../styles/appointment-new.css" />
  <title>Register Your Pet | BawBaw.lk</title>
</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="nav-logo">
      <a href="#"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
    </div>
    <div class="nav-menu-container">
      <ul class="nav-menu">
        <li><a class="nav-link" href="#">Home</a></li>
        <li><a class="nav-link active-link" href="#">Schedule</a></li>
        <li><a class="nav-link" href="#">Pet Advice</a></li>
        <li><a class="nav-link" href="#">Shop</a></li>
        <li><a class="nav-link" href="#">Help</a></li>
        <li><a class="nav-link" href="#">About</a></li>
      </ul>
    </div>
    <div class="nav-buttons">
      <button id="login-btn" class="btn btn-light">Login</button>
      <button id="reg-btn" class="btn btn-dark">Join Now</button>
    </div>
  </nav>

  <main>
    <div class="main-wrapper">

      <div class="form-container">

        <h2>Register Your Pet</h2>
        <!-- form -->
        <form method="post">
          <!-- pet name -->
          <div class="form-div">
            <label class="form-label" for="pet-name">Pet's name: </label>
            <input id="pet-name" class="form-input-field" type="text" name="pet_name" placeholder="Enter your pet's name" />
          </div>
          <!-- pet type -->
          <div class="form-div">
            <label class="form-label" for="pet-type">Pet type: </label>
            <select class="form-select" name="pet_type" id="pet-type">
              <option value="dog">Dog</option>
              <option value="cat">Cat</option>

              <option value="other">Other</option>
            </select>
          </div>
          <!-- pet breed -->
          <div class="form-div">
            <label class="form-label" for="pet-breed">Pet's breed: </label>
            <input id="pet-breed" class="form-input-field" type="text" name="pet_breed" placeholder="ex: Rottweiler" />
          </div>
          <!-- age -->
          <div class="form-div">
            <label class="form-label" for="age">Pet's age: </label>
            <input id="age" class="form-input-field" type="text" name="age" placeholder="Age of your pet in years" />
          </div>
          <!-- pet gender -->
          <div class="form-div">
            <label class="form-label" for="pet-gender">Pet gender: </label>
            <select class="form-select" name="pet_gender" id="pet-gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <input class="btn btn-dark" type="submit" value="Add Pet" name="register">
        </form>
      </div>

    </div>
  </main>

  <!-- footer -->
  <footer>
    <div class="footer-container">
      <div id="footer-sec-1" class="footer-img-container">
        <a href="#"> <img src="http://placehold.jp/300x160.png" alt="" /> </a>
      </div>
      <div id="footer-sec-2" class="footer-links-container flex column">
        <p class="h2-small footer-title">Navigation</p>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Home</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Schedule 2</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Advice</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Support</a>
        </div>
      </div>
      <div id="footer-sec-3" class="footer-links-container flex column">
        <p class="h2-small footer-title">Other Links</p>

        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Blog</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Reviews</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Carreers</a>
        </div>
        <div class="link-container">
          <i class="footer-nav-icon fa-solid fa-arrow-right"></i>
          <a class="footer-link" href="#">Contact</a>
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