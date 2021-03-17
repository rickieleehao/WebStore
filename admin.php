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

    <link rel = "stylesheet" href = "./styles/admin.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Admin</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>

        <div class = "button_grp">
        <ul class = "nobullet">
            <label>Category</label>
            <li class= "button">Men</li>
            <li class= "button">Women</li>
            <li class= "button">Kids</li><br>
        <ul class = "nobullet">
            <label>Number</label>
            <li class= "button">1</li>
            <li class= "button">2</li>
            <li class= "button">3</li>
            <li class= "button">4</li>
            <li class= "button">5</li>
            <li class= "button">6</li>
            <li class= "button">7</li>
            <li class= "button">8</li>
            <li class= "button">9</li>
            <li class= "button">10</li>
        </ul>
        </div>

        <h1>Administrator Page</h1><br/>
        <form class="formclass">
            <input type= "text" id= "name" name= "name" placeholder= "Name">
            <input type= "text" id= "price" name= "price" placeholder= "Price">
            <input type= "text" id= "promoRate" name= "promoRate" placeholder= "Promotion Rate">
            <input type="submit" value="Update">
        </form>
        

    
</body>

</html>