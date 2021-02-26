<!DOCTYPE html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
<h2>Sign in to your account</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<button onclick="window.location.href='register.php';".style.display='block'" style="width:auto;">Join Us</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="/success.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./img/web_icon3.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <a href="javascript:alert('Contact Customer Service for Password Reset');">Forgot password</a>
        <button type="submit">Login</button>
    </div>
    <button onclick="document.getElementById('id02').style.display='block'">Join Us</button>
  </form>
</body>
</html>