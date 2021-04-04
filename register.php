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
    <div class="register-container" id="register-email-error">
      <label>Email</label>
      <input id="register-email" onclick="promptError(false, 'register-email-error');" type="email" name="email" required>
      <span style="display: none">Email has been registered before!</span>
    </div>
    <div class="register-container">
      <label>Name</label>
      <input id="register-name" type="text" name="name" required>
    </div>
    <div class="register-container" id="register-password1-error">
      <label>Password</label>
      <input id="register-password1" onclick="promptError(false, 'register-password1-error');" type="password" name="password" autocomplete="new-password" maxlength="72" required>
      <span style="display: none">Password does not match!</span>
    </div>
    <div class="register-container" id="register-password2-error">
      <label>Retype Password</label>
      <input id="register-password2" onclick="promptError(false, 'register-password2-error');" type="password" name="retype-password" autocomplete="new-password" maxlength="72" required>
      <span style="display: none">Password does not match!</span>
    </div>
    <div class="register-dropdown">
      <select name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>
    </div>
    <div class="register-success" style="display:none">
      <span>Registration successful! You will be redirected.</span>
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
        document.getElementById(selector).classList.add('register-prompt');
        document.getElementById(selector).childNodes[3].value = "";
        document.getElementById(selector).childNodes[5].style = "display: block;";
      } else {
        document.getElementById(selector).classList.remove('register-prompt');
        document.getElementById(selector).childNodes[5].style = "display: none;";
      }
    }

    function decision(action) {
      switch (parseInt(action)) {
        case 0:
          promptError(true, "register-password1-error");
          promptError(true, "register-password2-error");
          break;
        case 1:
          promptError(true, "register-email-error");
          break;
        case 2:
          document.getElementsByClassName("register-success")[0].style.display = "flex";
          setTimeout(() => {
            window.location = "index.php";
          }, 3000)
      }
      document.cookie = "result=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
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

    async function loop() {
      var result = cookieFinder("result");
      while (result == "") {
        result = cookieFinder("result");
        await timer(20);
      }
      return result;
    }

    function error() {
      promptError(false, "register-email-error");
      promptError(false, "register-password1-error");
      promptError(false, "register-password2-error");
      loop().then(
        function(value) {
          decision(value);
        }
      );
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