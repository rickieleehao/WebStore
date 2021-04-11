<?php
if (!isset($_SESSION['loggedin'])) {
    echo '<script type="text/javascript"> alert("Required login to view the cart or add product.") </script>';
    header("refresh:0; url=index.php");
}

$totalPrice = 0;

if (isset($_GET['action'])) {
    if ($_GET['action'] == "delete") {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['item_id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

if (isset($_POST['addcart']) && isset($_SESSION['loggedin'])) {
    if (!isset($_POST['size'])) {
        echo '<script type="text/javascript"> alert("You need to pick a shoes size.") </script>';
        header("refresh:0; url=shopping.php?category=All&sub=");
    } else {
        if (isset($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'item_id' => $_POST['item_id'],
                'item_name' => $_POST['item_name'],
                'item_price' => $_POST['item_price'],
                'item_size' => $_POST['size']
            );
            $_SESSION['cart'][$count] = $item_array;
        } else {
            $item_array = array(
                'item_id' => $_POST['item_id'],
                'item_name' => $_POST['item_name'],
                'item_price' => $_POST['item_price'],
                'item_size' => $_POST['size']
            );
            $_SESSION['cart'][0] = $item_array;
        }
    }
}

$num = 1;
if (isset($_SESSION['cart'])) {
    echo "<div class='cartWrapper'>";
    foreach ($_SESSION['cart'] as $key => $value) {
        echo <<<HTML
            <div class='card'>
                <div class='card left'>
                    <h1>$num</h1>
                    <img src='./img/Shoes/{$value["item_id"]}_1.jpg'>
                </div>
                <div class='card right'>
                    <p class='item_name'>{$value["item_name"]}</p>
                    <p class='price'>RM {$value['item_price']}</p>
                    <p class='price'>Size - {$value['item_size']}</p>
                    <a href='cart.php?action=delete&id={$value['item_id']}'>Remove</a>
                </div>
            </div>
            <hr>
            HTML;
        $totalPrice += $value['item_price'];
        $num += 1;
    }
    echo "</div>";
}
echo <<<HTML
<div class='summary'>
    <div class='summaryWrapper'>
        <h1>Summary</h1>
        <p>Total Price - RM $totalPrice</p>
        <button>Make Payment</button>
    </div>
</div>
HTML;
