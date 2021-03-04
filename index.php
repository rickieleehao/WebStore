<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>FootWear</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>

    <div class="mainAd">
        <div class="mainAd_category">
            <p id="category-gender">Men</p>
            <p>Shoes</p>
            <p id="category-gender-end"></p>
        </div>
        <div class = "mainAd_imgWrapper">
            <img class="mainAd_img">
            <div>
                <a href="#">Shop</a>
            </div>
        </div>
    </div>

    <div class="featuredFootwear">
        <p>Featured Footwear</p>
        <div class="carouselWrapper">
            <div class="carousel">
                <!-- .js for img -->
                <a href="#"><img class="card card-1" src="./img/Shoes/men_1_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4>Shoes Name 1</h4>
                            <p>Shoes Desc</p>
                        </div>
                        <p class="cardPrice">22</p>
                    </div>
                </a>
                <a href="#"><img class="card card-2" src="./img/Shoes/men_1_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4>Shoes Name 1</h4>
                            <p>Shoes Desc</p>
                        </div>
                        <span>2</span>
                    </div>
                </a>
                <a href="#"><img class="card card-3" src="./img/Shoes/men_1_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4>Shoes Name 1</h4>
                            <p>Shoes Desc</p>
                        </div>
                        <span>2</span>
                    </div>
                </a>
                <a href="#"><img class="card card-4" src="./img/Shoes/men_1_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4>Shoes Name 1</h4>
                            <p>Shoes Desc</p>
                        </div>
                        <span>2</span>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <?php include "./component/footer.php"; ?>
</body>

</html>