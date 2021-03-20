<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./styles/shoppingtest.css">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
</head>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="button_grp">
        <div>
            <ul>
                <label>Gender</lable>
                    <li><button class="btn active" onclick="filterSelection('all')">All</button></li>
                    <li><button class="btn" onclick="filterSelection('man')">Man</button></li>
                    <li><button class="btn" onclick="filterSelection('woman')">Woman</button></li>
                    <li><button class="btn" onclick="filterSelection('kid')">Kid</button></li>
            </ul>
            <ul>
                <label>Price</lable>
                    <li><button class="btn" onclick="filterSelection('LowToHigh')">Low to High</button></li>
                    <li><button class="btn" onclick="filterSelection('HighToLow')">High to Low</button></li>
            </ul>
        </div>
    </div>

    <div id="container">
    </div>
</body>

<?php include "shoppingdata.php";?>
<script src="shopping.js"></script>

</html>