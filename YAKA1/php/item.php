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
  <link rel="stylesheet" href="../styles/item.css" />
  <title>Item Page</title>
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
          echo '<li><a class="nav-link" href="mypets.php">My Pets</a></li>';
          echo '<li><a class="nav-link" href="appointment-new.php">Schedule</a></li>';
        }
        ?>
        <li><a class="nav-link" href="pet advice.php">Pet Advice</a></li>
        <li><a class="nav-link  active-link" href="shop.php">Shop</a></li>
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
  <?php
  require "../php/config.php";


  $itemname = $_GET["name"];

  $sql = "select * from petstore where name like '%$itemname%'";

  if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {


      while ($row = $result->fetch_assoc()) {

  ?>
        <main>
          <div class="main-wrapper">
            <!-- search section  -->
            <div class="search-section">
              <div class="flex row">
                <div class="back-btn-container">
                  <button id="searchbar-back-btn" class="btn-round back">
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                </div>
                <div class="search-container">
                  <i class="icon fa-solid fa-magnifying-glass"></i>
                  <input class="search-bar" type="text" value="" />
                  <button id="shop-search-btn" class="btn searchbar-btn">
                    Search
                  </button>
                </div>
              </div>
              <div class="tags-container">
                <div class="btn searchbar-tag">Supplements</div>
                <div class="btn searchbar-tag">Cat Food</div>
                <i class="btn-round fa-solid fa-angle-down"></i>
              </div>
            </div>

            <!-- item section -->
            <div class="item-section">
              <!-- column left -->
              <div class="column-1 flex column">
                <div class="item-img-container">
                  <div class="main-img-container">

                    <?php echo "<img class = 'item-main-img' src='{$row["photo"]}'/>"; ?>

                  </div>
                  <div class="mini-img-container">
                    <img src="http://placehold.jp/82x82.png" alt="" />
                    <img src="http://placehold.jp/82x82.png" alt="" />
                    <img src="http://placehold.jp/82x82.png" alt="" />
                    <img src="http://placehold.jp/82x82.png" alt="" />
                  </div>
                </div>
              </div>

              <!-- column right -->
              <div class="column-2 flex column">
                <!-- item title -->
                <div class="title-container">
                  <h2 class="item-title">
                    <?php echo " <h2 class='column-2 flex column title-container item-title'>{$row["name"]}</h2>"; ?>
                  </h2>
                </div>
                <!-- item reviews -->
                <div class="ratings-container flex row">
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <div class="text">
                    <span id="item-rating">4.4</span> /
                    <span id="item-reviews">32</span> Reviews
                  </div>
                </div>

                <!-- quantity container -->
                <div class="quantity-container">
                  <label for="item-quantity">Quantity:</label>
                  <select class="dropdown-list" name="item-quantity" id="item-quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="in-stock"><span id="item-stock">10</span>+ in stock</p>
                </div>



                <!-- price -->
                <div class="price-container">
                  <p class="item-price"><span id="item-price"><?php echo "{$row["price"]} "; ?></span></p>
                </div>

                <!-- buy now buttons -->
                <div class="btn-container">

                  <a href="checkout.php"><button id="buy-now" class="btn btn-light buy-now">Buy Now</button></a>
                </div>

                <div class="divider"></div>

                <!-- shipping info -->
                <div class="shipping-container">
                  <i class="icon fa-solid fa-truck"></i>
                  <p>
                    Shipping:
                    <span class="">
                      <a href="#">2 Day Express Delivery</a>
                    </span>
                  </p>
                </div>
                <div class="shipping-select">
                  <button id="shipping-options" class="btn">
                    <i class="fa-solid fa-up-right-from-square"></i> More options
                  </button>
                </div>
              </div>
            </div>

            <!-- item description section -->
            <div class="item-info">
              <div class="tab-bar">
                <button id="tab-description" class="tab-btn active" onclick="openTab(event, 'tab-content-desc')">
                  Description
                </button>
                <button id="tab-specs" class="tab-btn" onclick="openTab(event, 'tab-content-specs')">
                  Specifications
                </button>
                <button id="tab-reviews" class="tab-btn" onclick="openTab(event, 'tab-content-reviews')">
                  Reviews
                </button>
                <!-- tab content -->
              </div>

              <!-- item description -->
              <div id="tab-content-desc" class="tab-content">
                <h3 id="item-desc-title"><?php echo $row["name"]; ?></h3>
                <p id="item-desc">
                  <?php echo $row["description"] ?>;
                </p>
              </div>

              <!-- item specifications -->

              <div id="tab-content-specs" class="tab-content">
                <h3>Specifications</h3>
                <p id="item-specs">

                </p>
              </div>

              <!-- reviews -->
              <div id="tab-content-reviews" class="tab-content">
                <h3>Reviews</h3>
                <p id="item-reviews-error" class="error-text">
                  No reviews yet. <a href="#">Write a review.</a>
                </p>
                <!-- generate this part with php based on the no. of reviews -->
                <!-- 1 review -->
                <div class="review-container">
                  <p class="review-name">James Bond</p>
                  <p class="review-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <div class="star-count">
                    <i class="fa-solid fa-star"></i>
                    <p><span>4.5</span> Stars</p>
                  </div>
                </div>
                <div class="review-container">
                  <p class="review-name">James Bond</p>
                  <p class="review-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <div class="star-count">
                    <i class="fa-solid fa-star"></i>
                    <p><span>4.5</span> Stars</p>
                  </div>
                </div>
                <div class="review-container">
                  <p class="review-name">James Bond</p>
                  <p class="review-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <div class="star-count">
                    <i class="fa-solid fa-star"></i>
                    <p><span>4.5</span> Stars</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
  <?php





      }
    }
  } else {
    echo "no results";
  }

  $conn->close();

  ?>




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
  <script src="../js/item.js"></script>
</body>

</html>