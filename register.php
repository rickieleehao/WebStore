<!DOCTYPE html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="./styles/register.css">
  <link rel="stylesheet" href="./styles/components.css">
  <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
  <script type="text/javascript">
    function error() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if (this.responseText === "") {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = "Registration succesful!";
            setTimeout(() => {
              window.location = "index.php";
            }, 3000)
          } else {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = this.responseText;
          }
        }
      }
      var formData = new FormData(document.querySelector("form"));
      xhttp.open("POST", "registerhandler.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("register=&email=" + formData.get("email") + "&name=" + formData.get("name") + "&password=" + formData.get("password") + "&retype-password=" + formData.get("retype-password") + "&gender=" + formData.get("gender"));
    }
  </script>
</head>

<body>
  <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
  <h2>Become a member</h2>
  <!-- <php include "./component/header.php"; ?> -->
  <!-- <php include "./component/footer.php"; ?> -->
  <div id="ID">
    <form class="register-content animate" target="dummyframe" method="post">
      <div class="imgcontainer">
        <img src="./img/web_iconMain.png" alt="Avatar" class="avatar" style="width:150px;height:150px;">
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
      <div id="error" style="display:none"></div>

      <button type="submit" onclick="error()" name="register">Register</button>
    </form>
  </div>
</body>

</html>