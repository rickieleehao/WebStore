<!DOCTYPE html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="./styles/register.css">
  <link rel="stylesheet" href="./styles/components.css">
  <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>

<body>
  <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
  <h2>Become a member</h2>
  <!-- <php include "./component/header.php"; ?> -->
  <!-- <php include "./component/footer.php"; ?> -->
  <div id="ID">
    <form class="register-content animate" action="registerhandler.php" target="dummyframe" method="post">
      <div class="imgcontainer">
        <img src="./img/web_icon3.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
      </div>

      <div class="container">
        <label>Email</label>
        <input type="email" name="email" required>
      </div>
      <div class="container">
        <label>Name</label>
        <input type="text" name="name" required>
      </div>
      <div class="container">
        <label>Password</label>
        <input type="password" name="password" autocomplete="new-password" maxlength="72" required>
      </div>
      <div class="container">
        <label>Retype Password</label>
        <input type="password" name="retype-password" autocomplete="new-password" maxlength="72" required>
      </div>
      <div class="dropdown">
        <select name="gender">
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
      </div>

      <button type="submit" name="register">Register</button>
    </form>
  </div>
</body>

</html>