<?php
    $conn = mysqli_connect('localhost','root','','data');
    $fid = $_POST['fid'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $Q = str_replace("'","''", $question);
    $A = str_replace("'","''", $answer);
    $sql = "INSERT INTO faq (fid, question, answer) VALUES (?,'$Q','$A')";
    $sql_run = mysqli_query($conn, $sql);
    if ($sql_run) {
        echo '<script type="text/javascript"> alert("Created") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Record added failed") </script>';
    }
    mysqli_close($conn);
    header("refresh:0; url=admin.php?filter=FAQ");
?>