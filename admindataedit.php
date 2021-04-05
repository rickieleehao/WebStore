<?php
    $conn = mysqli_connect('localhost','root','','data');

if (isset($_POST['id'])){
    $P_description = $_POST['p_description'];
    $C_description = $_POST['c_description'];
    $PD = str_replace("'","''", $P_description);
    $CD = str_replace("'","''", $C_description);

    $id = $_POST['id'];
    echo $_POST['id'];
    $sql = "UPDATE shoes_data SET name = '$_POST[name]',category = '$_POST[category]', sub_category = '$_POST[sub]',
    price = '$_POST[price]',year = '$_POST[year]',promotion_rate = '$_POST[p_rate]', 
    color_description = '$C_description',product_description = '$PD' WHERE id = '$_POST[id]'";
    $sql_run = mysqli_query($conn, $sql);
    if ($sql_run){
        echo '<script type="text/javascript"> alert("Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Shoe data update failed") </script>';
    }

    mysqli_close($conn);
    header("refresh:0; url=admin.php");
}else{
    $Question = $_POST['question'];
    $Answer = $_POST['answer'];
    $Q = str_replace("'","''", $Question);
    $A = str_replace("'","''", $Answer);
    $sql = "UPDATE faq SET question = '$Q', answer = '$A' WHERE fid ='$_POST[fid]'"; 
    $sql_run = mysqli_query($conn, $sql);
    if ($sql_run){
        echo '<script type="text/javascript"> alert("Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("FAQ update failed") </script>';
    }
    mysqli_close($conn);
    header("refresh:0; url=admin.php?filter=FAQ");
}
?>