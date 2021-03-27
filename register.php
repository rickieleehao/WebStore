<!DOCTYPE html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="./styles/register.css">
  <link rel="stylesheet" href="./styles/components.css">
  <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>

<body>
  <iframe name="dummyframe" id="dummyframe" title="VGhhbmtzIGZvciBiZWluZyBhIGZ1Y2tpbmcgcGFpbiBpbiB0aGUgYXNzLg==" style="display: none;"></iframe>

  <?php include "./component/header.php"; ?>
  <?php include "./component/navigator.php"; ?>
  <h2>Become a member</h2>

  <form class="register-content animate" action="registerhandler.php" target="dummyframe" method="post">
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

    <button id="submit" type="submit" onclick="error()" name="register">Register</button>
  </form>

  <?php include "./component/footer.php"; ?>
  <script type="text/javascript">
    const timer = ms => new Promise(res => setTimeout(res, ms));

    function error() {
      document.getElementById("error").style.display = "none";
      loop().then(
        function(value) {
          decision(value);
        }
      );
    }

    function decision(action) {
      switch (parseInt(action)) {
        case 0:
          document.getElementById("error").innerHTML = "Password does not match!";
          break;
        case 1:
          document.getElementById("error").innerHTML = "Email has been registered!";
          break;
        case 2:
          document.getElementById("error").innerHTML = "Registration successful! You will be redirected.";
          setTimeout(() => {
            window.location = "index.php";
          }, 5000)
      }
      document.getElementById("error").style.display = "block";
      document.cookie = "result=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }


    async function loop() {
      var result = cookieFinder("result");
      while (result == "") {
        result = cookieFinder("result");
        await timer(20);
      }
      return result;
    }

    function cookieFinder(cookieName) {
      var name = cookieName + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var elements = decodedCookie.split(';');
      for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        while (element.charAt(0) == ' ') {
          element = element.substring(1);
        }
        if (element.indexOf(name) == 0) {
          return element.substring(name.length, element.length);
        }
      }
      return "";
    }
    /*var formData = new FormData(document.querySelector(".register-content"));

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

    xhttp.open("POST", "registerhandler.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("register=&email=" + formData.get("email") + "&name=" + formData.get("name") + "&password=" + formData.get("password") + "&retype-password=" + formData.get("retype-password") + "&gender=" + formData.get("gender"));
    */
  </script>
</body>

</html>