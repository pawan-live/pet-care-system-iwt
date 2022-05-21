<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $item_name = $_POST['item_name'];
  $item_sku = $_POST['item_sku'];
  $item_price = $_POST['item_price'];
  $item_stock = $_POST['item_stock'];
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
  <link rel="stylesheet" href="../styles/admin.css" />
  <title>Page | BawBaw.lk</title>
</head>

<body>
  <!-- navbar -->
  <nav>
    <div class="nav-logo">
      <a href="#"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
    </div>
    <div class="nav-menu-container">
      <ul class="nav-menu">
        <li><a class="nav-link" href="index.html">Home</a></li>
        <li><a class="nav-link active-link" href="#">Admin Panel</a></li>
        <!-- <li><a class="nav-link" href="#">Pet Advice</a></li> -->
        <!-- <li><a class="nav-link" href="#">Shop</a></li> -->
        <!-- <li><a class="nav-link" href="#"></a></li> -->
        <!-- <li><a class="nav-link" href="#">About</a></li> -->
      </ul>
    </div>
    <div class="nav-buttons">
      <button id="login-btn" class="btn">Logout</button>
      <!-- <button id="reg-btn" class="btn btn-dark">Join Now</button> -->
    </div>
  </nav>

  <main>
    <div class="column-left">
      <div class="tab-bar">
        <!-- btn 1 summary -->
        <button id="tab-summary" class="tab-btn active" onclick="openTab(event, 'tab-content-summary')">
          Summary
        </button>
        <!-- items -->
        <button id="tab-items" class="tab-btn" onclick="openTab(event, 'tab-content-items')">
          Items
        </button>
        <!-- Appointments -->
        <button id="tab-appointments" class="tab-btn" onclick="openTab(event, 'tab-content-appointments')">
          Appointments
        </button>
        <!-- Orders -->
        <button id="tab-orders" class="tab-btn" onclick="openTab(event, 'tab-content-orders')">
          Orders
        </button>
        <!-- Reviews -->
        <button id="tab-reviews" class="tab-btn" onclick="openTab(event, 'tab-content-reviews')">
          Reviews
        </button>
        <!-- Inquiries -->
        <button id="tab-inq" class="tab-btn" onclick="openTab(event, 'tab-content-inq')">
          Inquiries
        </button>
      </div>
    </div>
    <div class="column-right">
      <!-- tab content -->
      <!-- summary -->
      <div id="tab-content-summary" class="tab-content">
        <h3 id="tab-title">Today's Summary</h3>

        <!-- counts section -->
        <div class="count-wrapper">
          <!-- appointment count -->
          <div id="div-appt-count" class="count-card-container">
            <p>Appointments</p>
            <div class="count-container">
              <i class="fa-solid fa-calendar-check"></i>
              <p class="count">37</p>
            </div>
          </div>
          <!-- orders count -->
          <div id="div-order-count" class="count-card-container">
            <p>Orders</p>
            <div class="count-container">
              <i class="fa-solid fa-cart-shopping"></i>
              <p class="count">15</p>
            </div>
          </div>
          <!-- revenue count -->
          <div id="div-revenue-count" class="count-card-container">
            <p>Revenue (LKR)</p>
            <div class="count-container">
              <i class="fa-solid fa-coins"></i>
              <p class="count">17,000</p>
            </div>
          </div>
          <!-- users -->
          <div id="div-user-count" class="count-card-container">
            <p>New users</p>
            <div class="count-container">
              <i class="fa-solid fa-users"></i>
              <p class="count">12</p>
            </div>
          </div>
        </div>
        <!-- lists -->
        <div class="lists-wrapper">
          <!-- new orders -->
          <div class="col-left-container">
            <div id="order-container" class="list-container">
              <h2>Latest Orders</h2>
              <!-- generated from js -->
            </div>
          </div>
          <!-- new appointments -->
          <div class="col-right-container">
            <div id="appt-container" class="list-container">
              <h2>New Appointments</h2>
              <!-- generated from js -->
            </div>
          </div>
        </div>
      </div>

      <!-- items -->
      <div id="tab-content-items" class="tab-content">
        <h3 id="tab-title">All Items</h3>
        <div class="add-item">
          <form method="post" action="">
            <div class="form-div">
              <label class="form-label" for="">Item Name: </label>
              <input class="form-input-field" type="text" placeholder="Enter item name" name="item_name">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item SKU: </label>
              <input class="form-input-field" type="text" placeholder="Enter item SKU" name="item_sku">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item Price (LKR)</label>
              <input class="form-input-field" type="text" placeholder="Enter item price" name="item_price">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Stock</label>
              <input class="form-input-field" type="text" placeholder="Enter item stock" name="item_stock">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Image URL</label>
              <input class="form-input-field" type="text" placeholder="Enter image URL" name="item_img">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item tags (use commas)</label>
              <input class="form-input-field" type="text" placeholder="ex: dog food, cat food" name="item_tags">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item rating</label>
              <input class="form-input-field" type="text" placeholder="Rating score (ex: 4.5)" name="item_rating">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item reviews</label>
              <input class="form-input-field" type="text" placeholder="Number of reviews" name="item_reviews">
            </div>
            <div class="form-div">
              <label class="form-label" for="">Item options (use commas)</label>
              <input class="form-input-field" type="text" placeholder="ex: 1kg, 2kg, 3kg" name="item_options">
            </div>
            <button type="submit" name="submit" class="btn btn-dark">Add Item</button>
          </form>
        </div>
        <div id="all-items-container" class="list-container">
          <!-- generated from js -->
          <div class="list-item">
            <div class="list-left-container">
              <img class="item-list-img" src="../images/shop/5.jpg.png" alt="" />
              <p>
                <span class="item-name" id="item-name">
                  <a href="#">Dog Food</a>
                </span>
                SKU: <span class="item-sku">123456</span>
              </p>
            </div>
            <div class="list-right-container">
              <span class="item-price">1700.00</span>
              <i class="fa-solid fa-pencil icon-pencil"></i>
              <i class="fa-solid fa-trash-can icon-trash"></i>
              <p></p>
            </div>
          </div>
          <div class="list-item">
            <div class="list-left-container">
              <img class="item-list-img" src="../images/shop/5.jpg.png" alt="" />
              <p>
                <span class="item-name" id="item-name">
                  <a href="#">Dog Food</a></span>
                SKU: <span class="item-sku">123456</span>
              </p>
            </div>
            <div class="list-right-container">
              <span class="item-price">1700.00</span>
              <i class="fa-solid fa-pencil icon-pencil"></i>
              <i class="fa-solid fa-trash-can icon-trash"></i>
              <p></p>
            </div>
          </div>
          <div class="list-item">
            <div class="list-left-container">
              <img class="item-list-img" src="../images/shop/5.jpg.png" alt="" />
              <p>
                <span class="item-name" id="item-name">
                  <a href="#">Dog Food</a></span>
                SKU: <span class="item-sku">123456</span>
              </p>
            </div>
            <div class="list-right-container">
              <span class="item-price">1700.00</span>
              <i class="fa-solid fa-pencil icon-pencil"></i>
              <i class="fa-solid fa-trash-can icon-trash"></i>
              <p></p>
            </div>
          </div>
        </div>
      </div>

      <!-- appointments -->
      <div id="tab-content-appointments" class="tab-content">
        <h3 id="tab-title">All Appointments</h3>
        <div id="all-appts-container" class="list-container">
          <div class="list-item">
            <div class="list-left-container">
              <p>
                <span class="item-name" id="item-name">
                  <a href="#">Dog Food</a>
                </span>
                SKU: <span class="item-sku">123456</span>
              </p>
            </div>
            <div class="list-right-container">
              <span class="item-price">1700.00</span>
              <i class="fa-solid fa-pencil icon-pencil"></i>
              <i class="fa-solid fa-trash-can icon-trash"></i>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <!-- reviews -->
      <div id="tab-content-reviews" class="tab-content">
        <h3 id="tab-title">Reviews</h3>
        <p id="tab-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
      <!-- inquiries -->
      <div id="tab-content-inq" class="tab-content">
        <h3 id="tab-title">Inquiries</h3>
        <p id="tab-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
      <!-- Orders -->
      <div id="tab-content-orders" class="tab-content">
        <h3 id="tab-title">Orders</h3>
        <p id="tab-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </main>
  <script src="../js/admin.js"></script>
</body>

</html>