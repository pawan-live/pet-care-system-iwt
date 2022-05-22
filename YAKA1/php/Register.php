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
    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    <link rel="stylesheet" type="text/css" href="../styles/Register1.css" />
    
    <title>Register Form</title>
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
    <div class="load-wrapper">
    <div class="box">
      <h1 class="h1-large">Registration</h1><br>
      <h3 class="h3-large">Owner Info</h3><br>
      <form>
        <p>Enter your details</p><br>
          <div class="input-box">
            <label class="form-label" for="field-first-name">First name</label>
            <input
              id="first-name"
              type="text"
              name="first_name"
              placeholder="Enter first name.."
              required
            />
          </div>
          <div class="input-box">
            <label class="form-label" for="field-last-name">Last name</label>
            <input
              id="field-last-name"
              class="form-input-field"
              type="text"
              name="last_name"
              placeholder="Enter last name.."
              required
            />
          </div>
        <Br>
        <label class="form-label" for="field-email">E-mail</label><br>
        <input
          id="field-email"
          class="form-input-field"
          type="text"
          name="email"
          placeholder="Enter e-mail.."
          required
        />
        <br><br>
        <label class="form-label" for="field-enter-password">Enter Password</label><br>
        <input
          id="field-enter-password"
          class="form-input-field"
          type="password"
          placeholder="Enter password.."
          required
        /><br>
        <ul>
          <li>Must be at least 6 characters</li>
          <li>Contains letters,numbers & symbols</li>
        </ul>
      </br>
        <label class="form-label" for="field-confirm-password">Confirm Password</label><br>
        <input
          id="field-confirm-password"
          class="form-input-field"
          type="password"
          name="password"
          placeholder="Re-enter password.."
          required
        />
        <br><br>
        <label class="form-label" for="tel-no">Contact Number</label><br>
        <div id="tel-no-container">
          <input
            id="country-code"
            type="text"
            class="form-input-field"
            placeholder="Country code"
            value="+94"
            name="phone"
            required
          />
          <br>
          <input id="tel-no" type="text" placeholder="" required />
        </div>
        <button class="btn btn-dark"><i style="margin-right: 6px;" class="fa-solid fa-user"></i>Register</button><br>
      </form>
    </div>
  </div>

  </body>
</html>
