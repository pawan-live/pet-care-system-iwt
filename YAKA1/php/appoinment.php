<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/appoinment.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Book an appoinment</title>
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
          <li><a class="nav-link" href="#">Schedule</a></li>
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

    <!-- content -->
    <div class="box">
      <h3 class="h3-large1">Book an Appointment</h3>
      <form action="">
        <label class="marg">Select your pet : </label>
        <select name="pets" id="pet">
          <option value="pet">Scooby,Dog (2 years)</option>
          <!-- <option value=""></option>
                <option value=""></option>
                <option value=""></option> -->
        </select>
        <!-- <button class="pet-btn">Edit pet Info</button> -->
        <br /><br />
        <label class="marg">Category :</label>
        <div class="align">
          <select name="pets" id="pet">
            <option value="pet">Pet nutrition</option>
            <!-- <option value=""></option>
                        <option value=""></option>
                        <option value=""></option> -->
          </select>
        </div>
        <br /><br />
        <label class="marg">Reason :</label><br />
        <textarea class="txt-area" rows="6" cols="83">
         Enter your message here..</textarea
        >
        <br /><br />
        <label class="marg">Date :</label>
        <div class="align-date">
          <input type="date" id="pet" />
        </div>
        <br /><br /><br />
        <label class="marg">Availabel Time :</label>
        <div class="align-time">
          <input type="time" id="pet" />
        </div>
        <br /><br />
        <hr id="hr" />
        <br />
        <label class="marg">Your Name :</label>
        <div class="align-name">
          <input type="text" placeholder="Name" id="pet" />
          <!-- <button class="pet-btn">Edit your Info</button> -->
        </div>
        <br /><br /><br />
        <label class="marg">Contact No. :</label>
        <div class="align-no">
          <input type="text" id="pet" />
        </div>
      </form>
      <br /><br />
      <!-- <p>Please download the BAWBAW app to continue with your consultation</p> -->
      <button class="btn btn-dark" id="book">Book Now</button>
    </div>
    <br />
    <br />
    <br />
    <br />
    <!-- footer -->
    <!-- <footer>
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
              <img
                class="footer-app-img"
                src="../images/footer/app-store-download.png"
                alt=""
              />
            </a>
            <a href="#">
              <img
                class="footer-app-img"
                src="../images/footer/play-store-download.png"
                alt=""
              />
            </a>
          </div>
        </div>
        <div class="footer-text">Copyright 2022 Group 09 | Flying Monkeys</div>
      </footer> -->
  </body>
</html>
