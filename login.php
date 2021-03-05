<!DOCTYPE html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>
<body>
<h2>Sign in to your account</h2>

<button onclick="document.getElementById('ID').style.display='block'" style="width:auto;">Login</button>
<button onclick="window.location.href='register.php';".style.display='block' style="width:auto;">Join Us</button>
<?php include "./component/header.php"; ?>
<?php include "./component/footer.php"; ?>
<div id="ID" class="login">
  <form class="login-content animate" action="/index.php" method="get">
    <div class="imgcontainer">
      <span onclick="document.getElementById('ID').style.display='none'" class="close" title="Close Login">&times;</span>
      <img src="./img/web_icon3.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
    </div>

    <div class="container">
        <input type="email" required>
        <label>Email</label>  
    </div>
    <div class="container">
        <input type="password" required>
        <label>Password</label>
        <a href="javascript:alert('Contact Customer Service for Password Reset');">Forgot password</a>
    </div>
      <button type="submit" class="btn">Login</button>
  </form>
<script>
// Get the modal
var modal = document.getElementById('ID');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>