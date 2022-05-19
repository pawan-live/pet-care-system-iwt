<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- stylesheets -->
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/item.css" />
    <title>Item Page</title>
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

    <main>
      <div class="main-wrapper">
        <!-- search section -->
        <div class="search-section">
          <div class="flex row">
            <div class="back-btn-container">
              <button id="searchbar-back-btn" class="btn-round back">
                <i class="fa-solid fa-arrow-left"></i>
              </button>
            </div>
            <div class="search-container">
              <i class="icon fa-solid fa-magnifying-glass"></i>
              <input class="search-bar" type="text" value="Search here" />
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
                <!-- <img
                  class="item-main-img"
                  src="http://placehold.jp/500x500.png"
                  alt="Main image"
                /> -->
          
              

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
                Club 4 Paws Dog Food - Extra Nutrition for your Pet
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
              <select
                class="dropdown-list"
                name="item-quantity"
                id="item-quantity"
              >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <p class="in-stock"><span id="item-stock">10</span>+ in stock</p>
            </div>

            <!-- size -->
            <div class="size-container">
              <p>Size:</p>
              <div id="option-1" class="select-option active">1kg</div>
              <div id="option-2" class="select-option">2kg</div>
              <div id="option-3" class="select-option">3kg</div>
            </div>

            <!-- price -->
            <div class="price-container">
              <p class="item-price">LKR <span id="item-price">1700.00</span></p>
            </div>

            <!-- buy now buttons -->
            <div class="btn-container">
              <button id="add-to-cart" class="btn btn-dark add-to-cart">
                Add to Cart
              </button>
              <button id="buy-now" class="btn btn-light buy-now">
                Buy Now
              </button>
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
            <button
              id="tab-description"
              class="tab-btn active"
              onclick="openTab(event, 'tab-content-desc')"
            >
              Description
            </button>
            <button
              id="tab-specs"
              class="tab-btn"
              onclick="openTab(event, 'tab-content-specs')"
            >
              Specifications
            </button>
            <button
              id="tab-reviews"
              class="tab-btn"
              onclick="openTab(event, 'tab-content-reviews')"
            >
              Reviews
            </button>
            <!-- tab content -->
          </div>

          <!-- item description -->
          <div id="tab-content-desc" class="tab-content">
            <h3 id="item-desc-title">Club 4 Paws Dog Food</h3>
            <p id="item-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>

          <!-- item specifications -->

          <div id="tab-content-specs" class="tab-content">
            <h3>Specifications</h3>
            <p id="item-specs">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
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
    </footer>
    <script src="../js/item.js"></script>
  </body>
</html>
