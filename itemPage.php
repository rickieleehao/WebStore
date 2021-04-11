<?php
include_once "configdb.php";
$shoes=$_GET['shoes'];

$query = "SELECT * FROM shoes_data WHERE id = '$shoes'";
if ($result = mysqli_query($conn,$query)){
    while($obj = mysqli_fetch_object($result)){
    $id = "$obj->id";  
    $category = "$obj->sub_category";
    $name = $obj->name;
    $price = $obj->price;
    $itemDesc = $obj->product_description;
    $colorDesc = $obj->color_description;
}
}

mysqli_close($conn);
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
            <!-- php for img -->
            <div>
                <img class="Img Img-1" src="./img/Shoes/<?php echo $shoes?>_1.jpg">
                <img class="Img Img-2" src="./img/Shoes/<?php echo $shoes?>_2.jpg">
                <img class="Img Img-3" src="./img/Shoes/<?php echo $shoes?>_3.jpg">
                <img class="Img Img-4" src="./img/Shoes/<?php echo $shoes?>_4.jpg">
            </div>
        </div>
        <div class="itemDets">
            <div>
                <!-- php for text -->
                <div class="itemDetsWrapper">
                    <p class="category"><?php echo $category?></p>
                    <p class="name"><?php echo $name?></p>
                    <p class="size">Select Size</p>
                    <p class="price">RM <?php echo $price?></p>
                </div>
                <div class="addCart">
                    <form action="cart.php" method="POST">
                        <div class="sizePicker">
                            <div><input type="radio" name="size" value="US 7">
                                <label>US 7</label></div>
                            <div><input type="radio" name="size" value="US 8">
                                <label>US 8</label></div>
                            <div><input type="radio" name="size" value="US 9">
                                <label>US 9</label></div>
                            <div><input type="radio" name="size" value="US 10">
                                <label>US 10</label></div>
                            <div><input type="radio" name="size" value="US 11">
                                <label>US 11</label></div>
                            <div><input type="radio" name="size" value="US 12">
                                <label>US 12</label></div>
                        </div>
                        <input type="hidden" name="item_id" value="<?php echo $id?>">
                        <input type="hidden" name="item_name" value="<?php echo $name?>">
                        <input type="hidden" name="item_price" value="<?php echo $price?>">
                        <input type="hidden" name="addcart" value="">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <p class="itemDesc"><?php echo $itemDesc?></p>

                <p class="itemColors">- <?php echo $colorDesc?></p>
                <br><br><br><br>
                <p class="returnPolicy">No return allowed on any Final Sale items,except for it flaws in workmanship are
                    found (as long as the hang tag has naot been removed)</p>

            </div>
        </div>
    </div>

</body>
<?php include "./component/footer.php"; ?>

</html>