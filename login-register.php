
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="login.php" method="post" class="login" >
            <div class="field">
              <input type="text" name="cne" placeholder="CNE" required>
            </div>
<div class="field">
              <input type="password"  name="password" placeholder="Password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="enregistrement.php" method="post" class="signup">
            <div class="field">
              <input type="text" name="cne-su" placeholder="CNE"  required>
            </div>
<div class="field">
              <input type="password"  name="password-su" id="mot_pass" placeholder="Password" required>
            </div>
<div class="field">
              <input type="password"  name="password-su" id="re_mot_pass" placeholder="Confirm password" required>
            </div>
        <h3 class="vert">match password</h3>
        <h3 class="rouge">not match password</h3>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit"  id="Envoyer" disabled value="Signup">
            </div>
</form>
</div>
</div>
</div>

<script src="js/verification.js"></script>
<script src="js/login-register.js"></script>
  </body>
</html>

