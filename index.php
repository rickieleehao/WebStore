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
            <p id="category-gender"><?php echo $gender_word?></p>
            <p id="category-gender-end"></p>
        </div>
        <div class="mainAd_imgWrapper">
            <img class="mainAd_img">
            <div>
                <a href="shopping.php?category=All&sub=">Shop</a>
            </div>
        </div>
    </div>

    <div class="featuredFootwear">
        <p>Featured Footwear</p>
        <div class="carouselWrapper">
            <div class="carousel">
                <!-- .php for img -->
                <?php include "indexdata.php";?>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>