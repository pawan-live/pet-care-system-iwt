<?php

session_start();

include("config.php");
include("functions.php");

check_login($conn);

if (check_login_no_redirect($conn)) {
  if (!($_SESSION['email'] === "admin@bawbaw.lk")) {
    header("Location: home.php");
  }
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
      <a href="home.php"><img src="../images/navbar/petcare_logo.png" alt="" /></a>
    </div>
    <div class="nav-menu-container">
      <ul class="nav-menu">
        <li><a class="nav-link" href="home.php">Home</a></li>
        <li><a class="nav-link active-link" href="#">Admin Panel</a></li>
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
          <table border="1" class="table">
            <tr>
              <th>photo</th>
              <th>name</th>
              <th>price</th>
              <th>description</th>
              <th>type</th>
              <th>update or delete</td>

                <?php
                //create the database connection
                include_once("config.php");
                $sql = "select * from petstore";
                if ($result = $conn->query($sql)) {
                  if ($result->num_rows > 0) {


                    while ($row = $result->fetch_assoc()) {

                      echo "<tr>";
                      echo "<td>" . $row['photo'] . "</td>";
                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['price'] . "</td>";
                      echo "<td>" . $row['description'] . "</td>";
                      echo "<td>" . $row['type'] . "</td>";
                      echo "<td><a href='updating.php? name={$row["name"]}'>update</a> | <a href='delete.php?name={$row["name"]}'>delete</a></td>";
                      echo "</tr>";
                    }
                  }
                } else {
                  echo "no results";
                }

                // $conn->close();
                ?>
          </table>


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
        <table border="1" class="table">
          <tr>
            <th>Appt. ID</th>
            <th>Pet ID</th>
            <th>User ID</th>
            <th>Pet Type</th>
            <th>Pet Name</th>
            <th>Age</th>
            <th>Reason</th>
            <th>Date</th>
            <th>Time</th>
            <th>Owner Name</th>
            <th>Contact No</th>

            <?php
            //create the database connection
            // include_once("config.php");
            $sql1 = "select * from appointment";
            if ($result1 = $conn->query($sql1)) {
              if ($result1->num_rows > 0) {


                while ($row1 = $result1->fetch_assoc()) {

                  echo "<tr>";
                  echo "<td>" . $row1['appt_id'] . "</td>";
                  echo "<td>" . $row1['pet_id'] . "</td>";
                  echo "<td>" . $row1['user_id'] . "</td>";
                  echo "<td>" . $row1['pet_type'] . "</td>";
                  echo "<td>" . $row1['pet_name'] . "</td>";
                  echo "<td>" . $row1['age'] . "</td>";
                  echo "<td>" . $row1['reason'] . "</td>";
                  echo "<td>" . $row1['date'] . "</td>";
                  echo "<td>" . $row1['time'] . "</td>";
                  echo "<td>" . $row1['owner_name'] . "</td>";
                  echo "<td>" . $row1['contact_no'] . "</td>";
                  echo "</tr>";
                }
              }
            } else {
              echo "no results";
            }

            $conn->close();
            ?>
        </table>

        <div id="all-appts-container" class="list-container">
          <div class="list-item">
            <div class="list-left-container">
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