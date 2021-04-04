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

  <form class="register-content" action="registerhandler.php" target="dummyframe" method="post">
    <div class="register-imgcontainer">
      <img src="./img/web_iconMain.png" alt="Avatar" class="avatar">
    </div>
    <div class="register-container">
      <h1>Become A Member</h1>
      <p class="desc">Create your profile and be one of the proud member of our store!</p>
    </div>
    <div class="register-container">
      <label>Email</label>
      <input onclick="promptError(false, 1);" type="email" name="email" required>
    </div>
    <div class="register-container">
      <label>Name</label>
      <input type="text" name="name" required>
    </div>
    <div class="register-container">
      <label>Password</label>
      <input onclick="promptError(false, 3);" type="password" name="password" autocomplete="new-password" maxlength="72" required>
    </div>
    <div class="register-container">
      <label>Retype Password</label>
      <input onclick="promptError(false, 4);" type="password" name="retype-password" autocomplete="new-password" maxlength="72" required>
    </div>
    <div class="register-dropdown">
      <select name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>
    </div>
    <div id="register-error" style="display:none">
      <div>Test</div>
    </div>
    <div class="register-container">
      <p class="disclaimer">By signing up to our service, you agree to our Privacy Policy and Terms Of Use.</p>
    </div>
    <div class="reg-submit-div">
      <button id="register-submit" type="submit" onclick="error()" name="register">Register</button>
    </div>
  </form>

  <?php include "./component/footer.php"; ?>
  <script type="text/javascript">
    const timer = ms => new Promise(res => setTimeout(res, ms));

    function promptError(enable, selector) {
      if (enable) {
        document.getElementsByClassName("register-container")[selector].classList.add('register-prompt');
        document.getElementsByClassName("register-container")[selector].childNodes[3].value = "";
      } else {
        document.getElementsByClassName("register-container")[selector].classList.remove('register-prompt');
      }
    }


    function error() {
      document.getElementById("register-error").style.display = "none";
      promptError(false, 1);
      promptError(false, 3);
      promptError(false, 4);
      loop().then(
        function(value) {
          decision(value);
        }
      );
    }

    function decision(action) {
      switch (parseInt(action)) {
        case 0:
          document.getElementById("register-error").childNodes[1].innerHTML = "Password does not match!";
          promptError(true, 3);
          promptError(true, 4);
          break;
        case 1:
          document.getElementById("register-error").childNodes[1].innerHTML = "Email has been registered before!";
          promptError(true, 1);
          break;
        case 2:
          document.getElementById("register-error").childNodes[1].innerHTML = "Registration successful! You will be redirected.";
          setTimeout(() => {
            window.location = "index.php";
          }, 3000)
      }
      document.getElementById("register-error").style.display = "flex";
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