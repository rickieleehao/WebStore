<?php
$conn = mysqli_connect('localhost','root','','data');
$category=$_GET['category'];
if(isset($_GET['price'])){
    $price = $_GET['price'];
    if ($price == ">"){ //Price High to Low
        if ($category == "All"){
            $query = "SELECT * FROM shoes_data 
            ORDER BY price DESC";
        }else{
            $query = "SELECT * FROM shoes_data WHERE category = '$category' 
            ORDER BY price DESC";
        }
    }
    else if ($price == "<"){ //Price Low to High
        if ($category == "All"){
            $query = "SELECT * FROM shoes_data 
            ORDER BY price ASC";
        }else{
            $query = "SELECT * FROM shoes_data WHERE category = '$category' 
            ORDER BY price ASC";
        }
    }
}else{
    if ($category == "All"){
        $query = "SELECT * FROM shoes_data";
    }else{
        $query = "SELECT * FROM shoes_data WHERE category = '$category'";
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