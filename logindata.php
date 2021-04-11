<?php
//Check email and password from database
include_once "configdb.php";

if (isset($_POST["login"])) {

    $email = $_POST["uemail"];
    $password = $_POST["password"];

    loginUser($conn, $email, $password);
    mysqli_close($conn);
}   

function loginUser($conn,$email,$password){
        $sql = mysqli_query($conn, "SELECT * FROM member WHERE email='$email'");

        $row = mysqli_fetch_assoc($sql);

        $hash = $row["password"];
       
        $passVAL = password_verify($password,$hash);
        
        if ($passVAL){
            session_start();
            // $_SESSION["userid"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["loggedin"] = true;

            if($row["type"] == "Admin"){
                echo "<script type='text/javascript'> alert('Welcome back Administrator!')</script>";
                header("Refresh:0; url=admin.php");
            }else{
                header("location: index.php");
            }
            
        }
        else if (!$passVAL){
            echo "<script type='text/javascript'> alert('Invalid login! Please try again!')</script>";
            header("Refresh:0; url=index.php");
        }
        mysqli_free_result($sql);
    }
?>