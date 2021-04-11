<!DOCTYPE html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="./styles/register.css">
  <link rel="stylesheet" href="./styles/components.css">
  <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>

<body>
  <iframe name="dummyframe" id="dummyframe" title="VGhhbmtzIGZvciBiZWluZyBhIGZ1Y2tpbmcgcGFpbiBpbiB0aGUgYXNzLg==" style="display: none;"></iframe>

  <?php include "./component/header.php"; ?>
  <?php include "./component/navigator.php"; ?>

  <form class="register-content" action="registerhandler.php" target="dummyframe" method="post">
    <div class="register-imgcontainer">
      <img src="./img/web_iconMain.png" alt="Avatar" class="avatar">
    </div>
    <div class="register-container">
      <h1>Become A Member</h1>
      <p class="desc">Create your profile and be one of the proud member of our store!</p>
    </div>
    <div class="register-container" id="register-email-error">
      <label>Email</label>
      <input id="register-email" onclick="promptError(false, 'register-email-error');" type="email" name="email" required>
      <span style="display: none">Email has been registered before!</span>
    </div>
    <div class="register-container">
      <label>Name</label>
      <input id="register-name" type="text" name="name" required>
    </div>
    <div class="register-container" id="register-password1-error">
      <label>Password</label>
      <input id="register-password1" onclick="promptError(false, 'register-password1-error');" type="password" name="password" autocomplete="new-password" maxlength="72" required>
      <span style="display: none">Password does not match!</span>
    </div>
    <div class="register-container" id="register-password2-error">
      <label>Retype Password</label>
      <input id="register-password2" onclick="promptError(false, 'register-password2-error');" type="password" name="retype-password" autocomplete="new-password" maxlength="72" required>
      <span style="display: none">Password does not match!</span>
    </div>
    <div class="register-dropdown">
      <select name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>
    </div>
    <div class="register-success" style="display:none">
      <span>Registration successful! You will be redirected.</span>
    </div>
    <div class="register-container">
      <p class="disclaimer">By signing up to our service, you agree to our Privacy Policy and Terms Of Use.</p>
    </div>
    <div class="reg-submit-div">
      <button id="register-submit" type="submit" onclick="error()" name="register">Register</button>
    </div>
  </form>

  <?php include "./component/footer.php"; ?>
</body>

</html>
<script src="./js/register.js"></script>