<?php
include_once "configdb.php";

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $sub = $_POST['sub'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $p_rate = $_POST['p_rate'];
    $C_description = $_POST['c_description'];
    $P_description = $_POST['p_description'];

    $sql = $conn->prepare("INSERT INTO `shoes_data` (`id`, `category`, `sub_category`, `name`, `price`, `promotion_rate`, `color_description`, `product_description`, `year`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssdidss", $id, $category, $sub, $name, $price, $p_rate, $C_description, $P_description,$year);
    
    if ($sql->execute()) {
        echo '<script type="text/javascript"> alert("Shoe data created") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Shoe data creation failed") </script>';
    }

    mysqli_close($conn);
    header("refresh:0; url=admin.php?filter=product");
} else {

    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = $conn->prepare("INSERT INTO faq (fid, question, answer) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $fid, $question, $answer);

    $query = "SELECT fid FROM faq";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $counter = 1;

        while ($obj = $result->fetch_object()) {
            if (strstr($obj->fid, strval($counter))) {
                $counter++;
            } else {
                break;
            }
        }

        $counter = strval($counter);

        if (strlen($counter) == 1) {
            $counter = "0" . $counter;
        }

        $fid = "F" . $counter;
    } else {
        $fid = "F01";
    }

    if ($sql->execute()) {
        echo '<script type="text/javascript"> alert("Created") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Record added failed") </script>';
    }

    mysqli_close($conn);
    header("refresh:0; url=admin.php?filter=FAQ");
}

?>