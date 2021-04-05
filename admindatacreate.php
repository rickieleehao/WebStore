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

    if (isset($_GET['category'])){
        $category = $_GET['category'];
        if ($category == "product" ) {
            $id = $_POST['id'];
            $category = $_POST['category'];
            $sub_category = $_POST['sub'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $promotion_rate = $_POST['p_rate'];
            $color_description = $_POST['c_description'];
            $product_description = $_POST['p_description'];
            $year = $_POST['year'];
            $sql = "INSERT INTO shoes_data (id, category, sub, name, price, p_rate, c_description, p_description, year) VALUES ('$id','$cateory','$sub_category','$name','$price','$promotion_rate','$color_description','$product_description','year')";
            $sql_run = mysqli_query($conn, $sql);
            if ($sql_run) {
                echo '<script type="text/javascript"> alert("Created") </script>';
            } else {
                echo '<script type="text/javascript"> alert("Record added failed") </script>';
            }
            mysqli_close($conn);
            header("refresh:0; url=admin.php?filter=product");
        }else if ($category == "FAQ"){
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
        }
    }
?>