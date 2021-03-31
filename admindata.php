<body>
    <link rel="stylesheet" href="./styles/admindata.css">
</body>
<?php

$conn = mysqli_connect('localhost','root','','data');
$option = 0;


if(!isset($_GET['filter'])){
    if (isset($_GET['category'])) {
        $option = 1; //edit page for product
    }else{
       $option = 2; //default page for product
    }
}else if (isset($_GET['filter'])){
    $filter = $_GET['filter'];

    if ($filter == "product"){
        if (isset($_GET['category'])) {
            $option = 1; //edit page for product
        }else{
           $option = 2; //default page for product
        }
    }else if($filter == "FAQ"){
        $option = 3; //default page for FAQ
    }
}

if ($option == 1){
    $category = $_GET['category'];
    $id = $_GET['id'];

    $query = "SELECT * FROM shoes_data WHERE id = '$id'";

    if ($result = mysqli_query($conn,$query)){
        while($obj = mysqli_fetch_object($result)){
            echo "<div class='product'>";
            echo "<table border='1px'>";
            echo "<tr>";
                echo "<th>Category</th>";
                echo "<th>Sub Category</th>";
                echo "<th>Name</th>";
                echo "<th>Price</th>";
                echo "<th>Promotion Rate</th>";
                echo "<th>Color Description</th>";
                echo "<th>Product Description</th>";
                echo "<th>Year</th>";
            echo "</tr>";
      
            
            echo "<tr>";
                echo "<td>".$obj->category."</td>";
                echo "<td>".$obj->sub_category."</td>";
                echo "<td>".$obj->name."</td>";
                echo "<td>".$obj->price."</td>";
                echo "<td>".$obj->promotion_rate."</td>";
                echo "<td>".$obj->color_description."</td>";
                echo "<td>".$obj->product_description."</td>";
                echo "<td>".$obj->year."</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";

            echo "<button> Edit </button>";
            
            
        }
    }
}else if ($option == 2){
    $query = "SELECT * FROM shoes_data";

    if ($result = mysqli_query($conn,$query)){
        while($obj = mysqli_fetch_object($result)){
            echo "<div class='product'>";
            echo "<ul>";
            echo "<a href='admin.php?category=product&id=".$obj->id."'>";
            echo "<li>".$obj->id."</li>";
            echo "</ul>";
            echo "</div>";
        }
    }
}else if ($option == 3){
    $query = "SELECT * FROM shoes_data";

    if ($result = mysqli_query($conn,$query)){
        while($obj = mysqli_fetch_object($result)){
            echo "<div class='product'>";
            echo "<ul>";
            echo "<a href='admin.php?category=product&id=".$obj->id."'>";
            echo "<li>".$obj->id."</li>";
            echo "<li>".$obj->id."</li>";
            echo "<li>".$obj->id."</li>";
            echo "<li>".$obj->id."</li>";
            echo "</a>";
            echo "</ul>";
            echo "</div>";
        }
    }
}


// if ($result = mysqli_query($conn,$query)){
//     while($obj = mysqli_fetch_object($result)){
//         $id = $obj->id; 
//     }

//     echo $id; //S030
//     $number = $id //take the last 3 number
//     //$number = 30

//     $number +1 = 31

//     $id = "S0"+"$number";
// }
?>