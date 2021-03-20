<?php
// include_once('.php');
$shoes1="./img/Shoes/".$_GET['shoes']."_1.jpg";
$shoes2="./img/Shoes/".$_GET['shoes']."_2.jpg";
$shoes3="./img/Shoes/".$_GET['shoes']."_3.jpg";
$shoes4="./img/Shoes/".$_GET['shoes']."_4.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="stylesheet" href="./styles/itemPage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>FootWear</title>
</head>
<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="itemWrapper">
        <div class="itemImg">
            <!-- js for img -->
            <div>
                <img class="Img Img-1" src="<?php echo $shoes1?>">
                <img class="Img Img-2" src="<?php echo $shoes2?>">
                <img class="Img Img-3" src="<?php echo $shoes3?>">
                <img class="Img Img-4" src="<?php echo $shoes4?>">
            </div>
        </div>
        <div class="itemDets">
            <div>
                <!-- js for text -->
                <div class="itemDetsWrapper">
                    <p class="category">Men's Shoe</p>
                    <p class="name">Nike Air Max 3</p>
                    <p class="size">Select Size</p>
                    <p class="price">RM 500</p>
                </div>
                <div class="sizeOption">
                    <div>
                        <button>US 7</button>
                        <button>US 8</button>
                        <button>US 9</button>
                        <button>US 10</button>
                        <button>US 11</button>
                        <button>US 12</button>
                    </div>
                </div>
                <div class="addCart">
                    <button>Add to Cart</button>
                </div>
                <p class="itemDesc">Nothing as fly, nothing as comfortable, nothing as proven—the Nike Air Max 3 stays
                    true to its roots with the iconic Waffle outsole, stitched overlays and classic TPU accents. Fresh
                    colours give a modern look while Max Air cushioning adds comfort to your journey.</p>

                <p class="itemColors">- Colour Shown: White/Spruce/Grey/Fog/HotLine</p>
                <br><br><br><br>
                <p class="returnPolicy">No return allowed on any Final Sale items,except for it flaws in workmanship are found (as long as the hang tag has naot been removed)</p>

            </div>
        </div>
    </div>

</body>
<?php include "./component/footer.php"; ?>

</html>
