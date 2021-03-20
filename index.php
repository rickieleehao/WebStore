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

<?php
$conn = mysqli_connect('localhost','root','','data');
$query = "SELECT * FROM shoes_data ORDER BY RAND() LIMIT 4";
$i = 0;
if ($result = mysqli_query($conn,$query));{
    while($obj = mysqli_fetch_object($result)){
        $shoes[$i] = $obj;
        $i++;
    }
}
mysqli_close($conn);
?>

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
                <a href="itemPage.php?shoes=<?php echo $shoes[0]->id?>"><img class="card card-1" src="./img/Shoes/<?php echo $shoes[0]->id?>_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4><?php echo $shoes[0]->name?></h4>
                            <p><?php echo $shoes[0]->sub_category?></p>
                        </div>
                        <p class="cardPrice">RM <?php echo $shoes[0]->price?></p>
                    </div>
                </a>
                <a href="itemPage.php?shoes=<?php echo $shoes[1]->id?>"><img class="card card-2" src="./img/Shoes/<?php echo $shoes[1]->id?>_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4><?php echo $shoes[1]->name?></h4>
                            <p><?php echo $shoes[1]->sub_category?></p>
                        </div>
                        <p class="cardPrice">RM <?php echo $shoes[1]->price?></p>
                    </div>
                </a>
                <a href="itemPage.php?shoes=<?php echo $shoes[2]->id?>"><img class="card card-3" src="./img/Shoes/<?php echo $shoes[2]->id?>_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4><?php echo $shoes[2]->name?><</h4>
                            <p><?php echo $shoes[2]->sub_category?></p>
                        </div>
                        <p class="cardPrice">RM <?php echo $shoes[2]->price?></p>
                    </div>
                </a>
                <a href="itemPage.php?shoes=<?php echo $shoes[3]->id?>"><img class="card card-4" src="./img/Shoes/<?php echo $shoes[3]->id?>_1.jpg">
                    <div class="cardDesc">
                        <div>
                            <h4><?php echo $shoes[3]->name?></h4>
                            <p><?php echo $shoes[3]->sub_category?></p>
                        </div>
                        <p class="cardPrice"><?php echo $shoes[3]->price?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
    <script src="index.js"></script>
</body>

</html>