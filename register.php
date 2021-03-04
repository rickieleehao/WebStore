<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>
<body>
<h2>Become a member</h2>
<?php include "./component/footer.php"; ?>
<div id="ID">
  <form class="register-content animate" action="/congrat.php" method="post">
    <div class="imgcontainer">
      <img src="./img/web_icon3.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
    </div>

    <div class="container">
        <label>Email</label>
        <input type="email" required>
    </div>
    <div class="container">
        <label>Name</label>
        <input type="text" required>
    </div>
    <div class="container">
        <label>Password</label>
        <input type="password" required>
    </div>
    <div class="dropdown">
      <select>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>

    <button type="submit">Register</button>
  </form>
</div>
</body>
</html>