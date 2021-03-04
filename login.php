<!DOCTYPE html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
<h2>Sign in to your account</h2>

<button onclick="document.getElementById('ID').style.display='block'" style="width:auto;">Login</button>
<button onclick="window.location.href='register.php';".style.display='block' style="width:auto;">Join Us</button>
<?php include "./component/footer.php"; ?>
<div id="ID" class="login">
  <form class="login-content animate" action="/success.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('ID').style.display='none'" class="close" title="Close Login">&times;</span>
      <img src="./img/web_icon3.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
    </div>

    <div class="container">
        <label>Email</label>
        <input type="email" required>
    </div>
    <div class="container">
        <label>Password</label>
        <input type="password" required>
        <a href="javascript:alert('Contact Customer Service for Password Reset');">Forgot password</a>
    </div>
      <button type="submit" class="btn">Login</button>
  </form>
  
</body>
</html>