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
        function (value) {
            decision(value);
        }
    );
}