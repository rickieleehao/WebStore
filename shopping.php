<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>
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
                    <a href="shopping.php?category=All&sub=">
                        <li class="btn">All</li>
                    </a>
                    <a href="shopping.php?category=Men&sub=">
                        <li class="btn">Men</li>
                    </a>
                    <a href="shopping.php?category=Women&sub=">
                        <li class="btn">Women</li>
                    </a>
                    <a href="shopping.php?category=Kids&sub=">
                        <li class="btn">Kids</li>
                    </a>
                    <label>Sub-Category</lable>
                        <a href="shopping.php?category=All&sub=lifestyle">
                            <li class="btn">Lifestyle</li>
                        </a>
                        <a href="shopping.php?category=Men&sub=jordan">
                            <li class="btn">Jordan</li>
                        </a>
                        <a href="shopping.php?category=Women&sub=running">
                            <li class="btn">Running</li>
                        </a>
                        <a href="shopping.php?category=Kids&sub=basketball">
                            <li class="btn">Basketball</li>
                        </a>
                        <a href="shopping.php?category=Kids&sub=football">
                            <li class="btn">Football</li>
                        </a>
                        <label>Price</lable>
                            <a href="shopping.php?category=<?php echo $_GET['category']?>&sub=<?php echo $_GET['sub']?>&price=<">
                                <li class="btn">Low to High</li>
                            </a>
                            <a href="shopping.php?category=<?php echo $_GET['category']?>&sub=<?php echo $_GET['sub']?>&price=>">
                                <li class="btn">High to Low</li>
                            </a>
            </ul>
        </div>
        <div class="shoppingContainer">
            <?php include "shoppingdata.php";?>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>