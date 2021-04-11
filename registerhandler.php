<?php
include_once "configdb.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $register = $conn->prepare("INSERT INTO member (email,password,name,gender,type) VALUES (?,?,?,?,'Member')");
    $register->bind_param("ssss", $email, $password, $name, $gender);

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $checkemail = "SELECT email FROM member WHERE email='$email'";
    $result = $conn->query($checkemail);

    if (!password_verify($_POST['retype-password'], $password)) {
        echo "Password does not match!";
        setcookie("result", "0", time() + 10, "/");
    } else if ($result->num_rows == 1) {
        echo "Email has already been registered!";
        setcookie("result", "1", time() + 10, "/");
    } else {
        $register->execute();
        session_start();
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["gender"] = $_POST['gender'];
        $_SESSION["loggedin"] = true;
        echo "";
        setcookie("result", "2", time() + 10, "/");
    }
}

mysqli_close($conn);