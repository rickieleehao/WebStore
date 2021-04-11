<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="stylesheet" href="./styles/blog.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Blog - Main Page</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="blog-content">
        <div class="spacer">
            <h1>Blogs</h1>
        </div>
        <a href="blog1.php" class="blog-showcase flexbox">
            <img src=".\img\Blog\comfortable-shoes-foot-care.jpg" alt="Image of footwear">
            <div>
                <h2>Choosing the Right Shoes</h2>
                <h3>And Why It Matters</h3>
                <p>Read more</P>
            </div>
        </a>
        <hr>
        <a href="blog2.php" class="blog-showcase flexbox">
            <div>
                <h2>The History of Shoes</h2>
                <h3>How Modern Shoes Came To Be</h3>
                <p>Read more</P>
            </div>
            <img src="./img/blog/history-of-shoes.jpg" alt="Image of historical footwear">
        </a>
        <hr>
        <a href="blog3.php" class="blog-showcase flexbox">
            <img src="./img/blog/shoe-care-1.jpg" alt="Image of someone polishing a leather shoe">
            <div>
                <h2>Taking Care of Your Shoes</h2>
                <h3>Shoes need some lovin' too</h3>
                <p>Read more</P>
            </div>
        </a>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>