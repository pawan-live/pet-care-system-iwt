<?php
session_start();

include("config.php");
include("functions.php");


if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $question = $_POST['Question'];

    $sql = "insert into 'faq' (Name,Email,Question)
        values('$name','$email','$question')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data inserted successfully";
    } else {
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FAQ</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/FAQ.css">
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
                <li><a class="nav-link" href="shop.php">Shop</a></li>
                <li><a class="nav-link  active-link" href="FAQ.php">Help</a></li>
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
    <div class="main-wrapper">
        <h1>FAQ</h1>
        <div class="faq">
            <div class="faq-container">
                <div class="faq-container-header">
                    What is BawBaw ?
                </div>
                <div class="faq-container-body">
                    <div class="faq-container-body-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-container-header">
                    How to download the reports ?
                </div>
                <div class="faq-container-body">
                    <div class="faq-container-body-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-container-header">
                    How to schedule the appointments ?
                </div>
                <div class="faq-container-body">
                    <div class="faq-container-body-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-container-header">
                    Ordering and shipping
                </div>
                <div class="faq-container-body">
                    <div class="faq-container-body-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-container-header">
                    About Help
                </div>
                <div class="faq-container-body">
                    <div class="faq-container-body-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
                </div>
            </div>
        </div>
        <div class="box">
            <form method="POST">
                <center>
                    <h2>Ask Your Question...</h2>
                </center><br><br>
                <div class="faq-name">
                    <label for="">Name:</label><br>
                    <input type="text" name="Name" placeholder="Enter name..">
                </div><br>
                <div class="faq-mail">
                    <label for="">E-mail:</label><br>
                    <input type="text" name="Email" placeholder="Enter e-mail">
                </div><br>
                <div class="faq-ques">
                    <label for="">Question:</label><br>
                    <textarea class="txt-area" name="Question"></textarea>
                </div><br>
                <input type="submit" class="btn btn-dark" id="que" value="Save" name="submit">
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


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


    <script src="../js/FAQ.js"></script>
</body>

</html>