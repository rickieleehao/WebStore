<?php 
$category = $_GET['category'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="stylesheet" href="./styles/shopping.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="button_grp">
        <div class="filter">
            <ul>
                <label>Gender</lable>
                    <a href="shopping.php?category=All">
                        <li class="btn">All</li>
                    </a>
                    <a href="shopping.php?category=Men">
                        <li class="btn">Men</li>
                    </a>
                    <a href="shopping.php?category=Women">
                        <li class="btn">Women</li>
                    </a>
                    <a href="shopping.php?category=Kids">
                        <li class="btn">Kids</li>
                    </a>
                    <label>Price</lable>
                        <a href="shopping.php?category=<?php echo $_GET['category']?>&price=<">
                            <li class="btn">Low to High</li>
                        </a>
                        <a href="shopping.php?category=<?php echo $_GET['category']?>&price=>">
                            <li class="btn">High to Low</li>
                        </a>
            </ul>
        </div>
        <div class="container">
            <?php include "shoppingdata.php";?>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>
</html>