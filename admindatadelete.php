<?php
    include_once "configdb.php";
    if (isset($_GET['category'])){
        $category = $_GET['category'];
        if ($category == "product" ) {
            $sql = "DELETE FROM shoes_data WHERE id='$_GET[id]'";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript"> alert("Record deleted") </script>';
            }else {
                echo '<script type="text/javascript"> alert("Delete fail") </script>';
            }
            mysqli_close($conn);
            header("refresh:0.5; url=admin.php?filter=product");
        }else if ($category == "FAQ"){
            $sql = "DELETE FROM faq WHERE fid='$_GET[fid]'";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript"> alert("Record deleted") </script>';
            }else {
                echo '<script type="text/javascript"> alert("Delete fail") </script>';
            }
            mysqli_close($conn);
            header("refresh:0.5; url=admin.php?filter=FAQ");
        }
    }
?>