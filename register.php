<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Become a member</h2>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
<div id="id02" class="modal">
  <form class="modal-content animate" action="/congrat.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="test.jpg" alt="Avatar" class="avatar" style="width:150px;height:150px;">
    </div>

    <div class="container">
        <label for="uemail"><b>Email</b></label>
        <br><input type="email" placeholder="Enter Email" name="uemail" required>

        <br><label for="uname"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit">Register</button>
    </div>
  </form>
</div>
</body>
</html>