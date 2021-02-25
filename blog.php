<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/rickieTest.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/blog.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Blog 1</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="blog-content">
        <div class="blog-text">
            <h1>Choosing the right shoes</h1>
            <h2>And Why It Matters</h2>
        </div>
        <div class="blog-crop">
            <img src="./img/blog/comfortable-shoes-foot-care.jpg" alt="Image of footwear">
        </div>
        <div class="blog-text">
            <!-- Maybe need to make them clickable later-->
            <div class="author">By Koh Jun Dong | Published 12 June 2020</div>
            <div class="category">Category: Footwear</div>
        </div>
    </div>

    <?php include "./component/footer.php"; ?>
</body>

</html>