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
                <img class="Img Img-1" src="./img/Shoes/men_1_1.jpg">
                <img class="Img Img-2" src="./img/Shoes/men_1_1.jpg">
                <img class="Img Img-3" src="./img/Shoes/men_1_1.jpg">
                <img class="Img Img-4" src="./img/Shoes/men_1_1.jpg">
            </div>
        </div>
        <div class="itemDets">
            <div>
                <!-- js for text -->
                <h2 class="Category">Men's Shoe</h2>
                <h1 class="Name">Nike Air Max 3</h1>
                <h3>Select Size</h3>
                <div class="size">
                    <button>US 7</button>
                    <button>US 8</button>
                    <button>US 9</button>
                    <button>US 10</button>
                    <button>US 11</button>
                    <button>US 12</button>
                </div>
                <div class="addCart">
                    <button>Add to Card</button>
                </div>
                <h3 class="itemDesc">Nothing as fly, nothing as comfortable, nothing as proven—the Nike Air Max 3 stays
                    true to its roots with the iconic Waffle outsole, stitched overlays and classic TPU accents. Fresh
                    colours give a modern look while Max Air cushioning adds comfort to your journey.</h3>

                <h3 class="itemColors">- Colour Shown: White/Spruce/Grey/Fog/HotLine</h3>

            </div>
        </div>
    </div>

</body>
<?php include "./component/footer.php"; ?>

</html>