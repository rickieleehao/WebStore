<head>
    <link rel="stylesheet" href="./styles/login.css">
</head>

<div id="ID" class="login">
    <form class="login-content animate" action="login.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('ID').style.display='none'" class="close" title="Close Login">&times;</span>
            <img src="./img/web_iconMain.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
        </div>

        <div class="container">
            <label>Email</label>
            <input type="email" name="uemail" required>
        </div>
        <div class="container">
            <label>Password</label>
            <input type="password" name="password" required>
            <a href="contact.php">Forgot password</a>
            <button type="submit" class="btn" name="login">Login</button>
        </div>
    </form>
</div>

<?php
    include 'function.php';
    //database connect
    $conn = mysqli_connect('localhost', 'root', '', 'data');


    if (isset($_POST["login"])) {
                  
        $email = $_POST["uemail"];
        $password = $_POST["password"];
  
        loginUser($conn, $email, $password);
    }   
?>
</section>
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