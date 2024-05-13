<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/component.css" />
  <link rel="stylesheet" href="css/signup.css" />
  <title>Document</title>
</head>

<body>
  <main>
    <form method="POST" id="form" redirect="index">
      <div class="form-heading">
        <h2>Sign up</h2>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="input-field" id="input-field">
        <input type="nam" placeholder="First name" name="fname" id="first-name" />
        <input type="text" placeholder="Last name" name="lname" id="last-name" />
        <input type="email" placeholder="Email" name="email" id="email" />

        <div class="pass-input">
          <input type="password" placeholder="Password" name="password" id="password" />
          <img src="assets/images/eye-show-svgrepo-com.svg" alt="" id="pass-toggle" class="pass-toggle" />
        </div>

        <div class="pass-input">
          <input type="password" placeholder="Confirm password" id="conf-password" name="conf_password" />
          <img src="assets/images/eye-show-svgrepo-com.svg" alt="" id="conf-pass-toggle" class="pass-toggle" />
        </div>
      </div>

      <div class="form-response" id="form-response"></div>

      <div class="btn-wrapper">
        <a href="index.php" class="form-back-btn" id="back-btn">Back</a>
        <input type="submit" value="Sign up" name="submit" class="button --primary-btn" id="signup-btn" />
      </div>
    </form>
  </main>

  <script src="js/pass_toggle.js"></script>
  <script src="js/signup_request.js"></script>
</body>

</html>