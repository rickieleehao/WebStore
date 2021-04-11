<?php
$conn = mysqli_connect('localhost', 'root', '', 'data');

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

    echo $_POST['id'];
    $sql = $conn->prepare("UPDATE shoes_data SET name = ?, category = ?, sub_category = ?, price = ?, year = ?, promotion_rate = ?, color_description = ?, product_description = ? WHERE id = $id");
    $sql->bind_param("sssdidss", $name, $category, $sub, $price, $year, $p_rate, $C_description, $P_description);
    if ($sql->execute()) {
        echo '<script type="text/javascript"> alert("Updated") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Shoe data update failed") </script>';
    }

    mysqli_close($conn);
    header("refresh:0; url=admin.php");
} else {
    $Question = $_POST['question'];
    $Answer = $_POST['answer'];

    $sql = $conn->prepare("UPDATE faq SET question = ?, answer = ? WHERE fid ='$_POST[fid]'");
    $sql->bind_param("ss", $Question, $Answer);
    if ($sql->execute()) {
        echo '<script type="text/javascript"> alert("Updated") </script>';
    } else {
        echo '<script type="text/javascript"> alert("FAQ update failed") </script>';
    }
    mysqli_close($conn);
    header("refresh:0; url=admin.php?filter=FAQ");
}
