<?php
include_once "configdb.php";

$category=$_GET['category'];
$sub=$_GET['sub'];
if(isset($_GET['price'])){
    $price = $_GET['price'];
    if ($price == ">"){ //Price High to Low
        if ($category == "All" && $sub ==""){ 
            $query = "SELECT * FROM shoes_data 
            ORDER BY price DESC";
        } else if ($category == "All"){ //$sub not empty
            $query = "SELECT * FROM shoes_data WHERE sub_category = '$sub'
            ORDER BY price DESC";
        } else if ($sub == ""){ //category not empty
            $query = "SELECT * FROM shoes_data WHERE category = '$category' 
            ORDER BY price DESC";
        } else { //$category & $sub not empty
            $query = "SELECT * FROM shoes_data WHERE category = '$category' AND sub_category = '$sub'
            ORDER BY price DESC";
        }
    }
    else if ($price == "<"){ //Price Low to High
        if ($category == "All" && $sub ==""){ 
            $query = "SELECT * FROM shoes_data 
            ORDER BY price ASC";
        } else if ($category == "All"){ //$sub not empty
            $query = "SELECT * FROM shoes_data WHERE sub_category = '$sub'
            ORDER BY price ASC";
        } else if ($sub == ""){ //category not empty
            $query = "SELECT * FROM shoes_data WHERE category = '$category' 
            ORDER BY price ASC";
        } else { //$category & $sub not empty
            $query = "SELECT * FROM shoes_data WHERE category = '$category' AND sub_category = '$sub'
            ORDER BY price ASC";
        }
    }
}else{
    if ($category == "All" && $sub ==""){ 
        $query = "SELECT * FROM shoes_data";
    } else if ($category == "All"){ //$sub not empty
        $query = "SELECT * FROM shoes_data WHERE sub_category = '$sub'";
    } else if ($sub == ""){ //category not empty
        $query = "SELECT * FROM shoes_data WHERE category = '$category'";
    } else { //$category & $sub not empty
        $query = "SELECT * FROM shoes_data WHERE category = '$category' AND sub_category = '$sub'";
    }
}

if ($result = mysqli_query($conn,$query)){
    while($obj = mysqli_fetch_object($result)){
        echo "<div class='card'>";
        echo "<a href='itemPage.php?shoes=".$obj->id."'>";
        echo "<img src='./img/Shoes/".$obj->id."_1.jpg'style='width:70%''>";
        echo "<h1>".$obj->name."</h1>";
        echo "<p class='price'>RM ".$obj->price."</p>";
        echo "</a>";
        echo "</div>";
    }
}

mysqli_close($conn);
?>