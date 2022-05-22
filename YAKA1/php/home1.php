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
  <link rel="stylesheet" href="../styles/home.css" />
  <title>Home | BawBaw.lk</title>
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

  <!-- hero section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="title">Give the Best for your Pet</h1>
      <p class="subtitle">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="btn-container">
        <button class="btn btn-dark">Get Started</button>
      </div>
    </div>
  </section>

  <!-- med needs and advice -->
  <section id="advice-section">
    <div class="container">
      <div class="row-container flex row">
        <div class="img-container">
          <img id="sec-2-img-1" src="../images/home/vert img.jpg" alt="" />
        </div>

        <div class="right-content flex column">
          <h1 class="mini-title">Get Advice for your Pets</h1>
          <p class="subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="btn-container">
            <button class="btn btn-dark">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- med needs and advice -->
  <section id="advice-section-2">
    <div class="container">
      <div class="row-container flex row">
        <div class="left-content flex column">
          <h1 class="mini-title">Medical Needs for Your Pet</h1>
          <p class="subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="btn-container">
            <button class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="img-container">
          <img id="sec-2-img-2" src="../images/home/dog img.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section id="appointments">
    <div class="container">
      <h1 class="title">Hassle-free Appointments</h1>
      <p class="subtitle">IN JUST 3 STEPS</p>
      <div class="pet-icon-container flex row">
        <div class="pet-group flex column">
          <i class="fa-solid fa-user" style="padding-left: 62px; padding-right: 62px"></i>
          <p class="big-number">01</p>
          <p class="text">Register</p>
        </div>
        <div class="pet-group flex column">
          <i class="fa-solid fa-dog"></i>
          <p class="big-number">02</p>
          <p class="text">Add your pet</p>
        </div>
        <div class="pet-group flex column">
          <i class="fa-solid fa-calendar-days" style="padding-left: 62px; padding-right: 62px"></i>
          <p class="big-number">03</p>
          <p class="text">Schedule</p>
        </div>
      </div>
    </div>
  </section>

  <!-- watch video -->
  <section id="video-section">
    <div class="container">
      <div class="row-container flex row">
        <div class="img-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/peUVLEUj-AM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="right-content flex column">
          <h1 class="mini-title">Watch our Detailed Videos</h1>
          <p class="subtitle">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="btn-container">
            <button class="btn btn-dark">Watch Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Join now -->
  <section class="hero-section lower">
    <div class="container">
      <h1 class="title">Join now to get the Benefits</h1>
      <p class="subtitle">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="btn-container">
        <button class="btn btn-dark">Join Now</button>
      </div>
    </div>
  </section>

  <!-- 
    <h1 class="title">Give the Best for your Pet</h1>
    <p class="subtitle">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <button class="btn btn-dark">Get Started</button> -->

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