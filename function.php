<?php
//Check email and password from database
function loginUser($conn,$email,$password){
        $sql = mysqli_query($conn, "SELECT * FROM member WHERE email='$email'");

        $row = mysqli_fetch_assoc($sql);

        $passVAL = ($password == $row["password"]);
        
        
        if ($passVAL){
            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["name"];
            header("location: index.php");
        }
        else if (!$passVAL){
            echo '<div class="fail">Login failed,please try again</div>';
            header("Refresh:2; url=index.php");
        }
        mysqli_free_result($sql);
    }
?>