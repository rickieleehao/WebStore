<head>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<div class="topheader">
    <ul>
        <li>Join Us</li>
        <span>|</span>
        <li onclick="document.getElementById('ID').style.display='block'" style="width:auto;">Sign In</li>
    </ul>
    <div id="ID" class="login">
        <form class="login-content animate" action="/index.php" method="get">
            <div class="imgcontainer">
                <span onclick="document.getElementById('ID').style.display='none'" class="close" title="Close Login">&times;</span>
                <img src="./img/web_iconMain.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
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
    </div>
</div>
<div class="headerWrapper">
    <div class="header">
        <img id="logo" src="./img/web_iconMain.png" alt="footwearLogo">
        <nav>
            <ul>
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Sales</a></li>
            </ul>
        </nav>
        <a href="#"><img id="cart" src="./img/Shopping-Cart-icon.png" alt="Cart"></a>
    </div>
</div>

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