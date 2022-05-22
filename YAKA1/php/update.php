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
  <link rel="stylesheet" href="../styles/style.css"/>
  <link rel="stylesheet" href="../styles/update.css">

  <title>Update Shop Items</title>
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
    <div class="dataInsert">
      <h3>Insert Items into Shop</h3>
      <div class="formsdesign">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          Enter the product name : <input type="text" name="name1" class="name"> <br>
          Enter the directory of the image <input type="type" name="image" class="imagedirec" multiple> <br>
          Enter the price of the product : <input type="text" name="PR" class="price"><br>
          Enter the description of thee product : <textarea name="des" id="" cols="30" rows="10" class="description"></textarea><br>
          Enter the type of the product : <input type="text" name='type'><br>
          <input type="submit" name="btnSubmit">
        </form>
      </div>
    </div>

    <hr>
    <h3>Update and delete data in shop </h3>
    <table border="1" class="table">
      <tr>
        <td>photo</td>
        <td>name</td>
        <td>price</td>
        <td>description</td>
        <td>type</td>
        <td>update or delete</td>

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

        $conn->close();
        ?>
    </table>

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
<!-- upload the data to the database php part -->
<?php


// include database connection file
require_once("config.php");

if (isset($_POST["btnSubmit"])) {

  $name = $_POST['name1'];

  $price = $_POST['PR'];
  $description = $_POST['des'];


  $sql = "INSERT INTO newpet (photo,name,price,description) VALUES('$fileName','$name','$price','$description')";

  if ($conn->query($sql)) {
    echo "You added the data succesefully";
  } else {
    echo "error" . $conn->error;
  }
  $conn->close();
}

?>