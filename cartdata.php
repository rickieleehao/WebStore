<?php
if(!isset($_SESSION['loggedin'])){
    echo '<script type="text/javascript"> alert("Required login to view the cart or add product.") </script>';
    header("refresh:0; url=index.php");
}

$totalPrice = 0;

if(isset($_GET['action'])){
    if($_GET['action'] == "delete"){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['item_id'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
            }
        }
    }   
}

if(isset($_POST['addcart'])&&isset($_SESSION['loggedin'])){
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
            echo "<p class='price'>RM ".$value['item_price']."</p>";
            echo "<a href='cart.php?action=delete&id=".$value['item_id']."'>Remove</a>";
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