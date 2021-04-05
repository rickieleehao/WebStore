<?php
    $conn = mysqli_connect('localhost','root','','data');
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

    // echo 
    // "<script type='text/javascript'>
    // function delete_id(id)
    // {
    //      if(confirm('Sure To Remove This Record ?'))
    //      {
    //         window.location.href='index.php?delete_id='+id;
    //      }
    // }
    // </script>";

    // if(isset($_GET['delete_id'])){
    //     $conn = mysqli_connect('localhost','root','','data');
    //     $sql = "DELETE FROM faq WHERE fid='$_GET[fid]'";
    //     if (mysqli_query($conn, $sql)) {
    //         echo "Record deleted successfully";
    //     }else {
    //         echo "Error deleting record: " . mysqli_error($conn);
    //     }
    //     mysqli_close($conn);
    //     header("refresh:0.5; url=admin.php?filter=FAQ");
    // }
?>