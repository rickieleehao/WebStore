<?php
$conn = mysqli_connect('localhost','root','','data');
$totalPrice = 0;

if(isset($_POST['addcart'])){
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        $item_array = array (
            'item_id' => $_POST['item_id'],
            'item_name' => $_POST['item_name'],
            'item_price' => $_POST['item_price']
        );
        $_SESSION['cart'][$count] = $item_array;
    }else{
        $item_array = array (
            'item_id' => $_POST['item_id'],
            'item_name' => $_POST['item_name'],
            'item_price' => $_POST['item_price']
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

$num = 1;
if(isset($_SESSION['cart'])){
    echo "<div class='cartWrapper'>";
    foreach($_SESSION['cart'] as $key=>$value){
            echo "<div class='card'>";
            echo "<div class='card left'>";
            echo "<h1>".$num."</h1>";
            echo "<img src='./img/Shoes/".$value['item_id']."_1.jpg'>";
            echo "</div>";
            echo "<div class='card right'>";
            echo "<h1>".$value['item_name']."</h1>";
            // echo "<p>".$obj->sub_category."</p>";
            echo "<p class='price'>RM ".$value['item_price']."</p>";
            echo "</div>";
            echo "</div>";
            $totalPrice += $value['item_price'];
            $num+=1;
        }
        echo "</div>";
    }
echo "<div class='summary'>";
echo "<div class='summaryWrapper'>";
echo "<h1>Summary</h1>";
echo "<h1>Total Price ".$totalPrice."</h1>";
echo "<button>Make Payment</button>";
echo "</div>";
echo "</div>";
?>