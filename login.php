<?php include 'logindata.php'; ?>
<link rel="stylesheet" href="./styles/login.css">
<div id="ID" class="login">
    <form class="login-content animate" action="login.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('ID').style.display='none'" class="close" title="Close Login">&times;</span>
            <img src="./img/web_iconMain.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
        </div>

        <div class="container">
            <label>Email</label><br>
            <input type="email" name="uemail" required><br>
        </div>
        <div class="container">
            <label>Password</label><br>
            <input type="password" name="password" required><br><br>
            <a href="contact.php">Forgot password</a><br><br>
            <button type="submit" class="btn" name="login">Login</button><br>
        </div>
    </form>
</div>
</section>
<script src="./js/login.js"></script>