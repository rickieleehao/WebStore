<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Admin</title>
</head>

<body>
    <?php include "./component/adminheader.php"; ?>
    <?php include "./component/navigator.php"; ?>

    <div class="button_grp">
        <label>Category</label>
        <ul class="nobullet">
            <a href="admin.php?filter=product">
                <li class="button">Product</li>
            </a>
            <a href="admin.php?filter=FAQ">
                <li class="button">FAQ</li>
            </a>
        </ul>
    </div>
    <div class="content">
        <nav>
            <?php include "admindata.php"; ?>
        </nav>
    </div>
</body>

</html>