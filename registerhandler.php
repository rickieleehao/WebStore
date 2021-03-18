<?php

$sql = mysqli_connect('localhost', 'root', '', 'data');

if ($sql->connect_error) {
    die("Connection failed: " . $sql->connect_error);
}

if (isset($_POST['register'])) {
    $register = $sql->prepare("INSERT INTO member (email,password,name,gender,type) VALUES (?,?,?,?,'Member')");
    $register->bind_param("ssss", $email, $password, $name, $gender);

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $checkemail = "SELECT email FROM member WHERE email='$email'";
    $result = $sql->query($checkemail);

    if (!password_verify($_POST['retype-password'], $password)) {
        echo '<script>alert("Password typed is not the same")</script>';
    } else if ($result->num_rows == 1) {
        echo '<script>alert("Email has been registered before!")</script>';
    } else {
        $register->execute();
        echo 'Register successful, but show in some form';
    }
}
