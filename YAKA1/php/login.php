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
    <link rel="stylesheet" href="../styles/login.css" />
    <title>Login Page</title>
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

    <!-- Login -->
    <div class="loginbox">
      <h1 class="h1-large">Login Here</h1>
      <form method="POST" action = "session.php">
        <p>E-mail</p>
        <input type="text" name="user-name" placeholder="Enter e-mail.." required />
        <p>Password</p>
        <input type="password" name="passsword" placeholder="Password.." required />
        <input class="btn btn-dark" type="submit" name="sub1" value="Log In"><br/>
        <input class="btn btn-light" type="submit" name="sub2" value="Sign In With Google"><br/><br/>
        <a href="">Forgot password ?</a> <br /><br />
        <a href="../html/Register1.html">I don't have an acccount</a>
      </form>
    </div>
  </body>
</html>
