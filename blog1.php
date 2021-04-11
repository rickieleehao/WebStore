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
    <title>Blog - Choosing the Right Shoes</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="blog-content">
        <h1>Choosing the Right Shoes</h1>
        <h2>And Why It Matters</h2>
        <div class="blog-crop">
            <img src="./img/blog/comfortable-shoes-foot-care.jpg" alt="Image of footwear">
        </div>
        <div class="flexbox" id="infobox">
            <div id="author">By Koh Jun Dong | Published 12 June 2020</div>
            <div id="category">Category: Footwear</div>
        </div>
        <div class="blog-text">

            <div class="blog-section">
                <p>Shoes are a crucial part of the attire, both for style but also for functional purposes. Shoes
                    protect us from the elements and help reduce the chances of injuries.</p>
                <p>There is no single best shoe. Different scenarios require different shoes, and what fits you may not
                    be suitable for others.</p>
            </div>
            <h3>Buying the right shoes is important</h3>
            <div class="blog-section">
                <p>As mentioned earlier, you should not multitask your shoes. Even athletic shoes have different
                    construction tailored to their specific purposes. If in doubt, contact the store clerk for more
                    information about the purpose of the shoe.</p>
                <p>Note that your feet expand over the day, so it is best to shop for a shoe during the evenings. If
                    possible, bring a traced outline of your feet to check the shoes. The traced outline can you what
                    width, length and arch type to expect.</p>
                <p>Your feet change over time. Don't buy your shoes based on the size alone. Try out the shoe whenever
                    possible to make sure it suits you.</p>
                <p>Your left and right foot will also have a different size. For best fit, buy the shoe that fits your
                    larger feet. The shoe should feel comfortable when new. Do not believe in "breaking-in" the shoe.
                </p>
                <p>And when your sole eventually visibly wears out, it is time to replace them, even if the shoe feels
                    normal to walk on. It may no longer provide the proper support needed, and continual usage can lead
                    to injuries.</p>
            </div>
            <h3>Ideal shoe features</h3>
            <div class="blog-section">
                <ul class="blog-list">
                    <li>Should have 1/2 inch of space in front of the longest toe</li>
                    <li>Supports your foot arch</li>
                    <li>No more than 1 and 1/2 inch of heel</li>
                    <li>Stiff, snug back to prevent sliding inside the shoes</li>
                </ul>
            </div>

            <div id="social">
                <a href="https://www.facebook.com"><img src="./img/facebook.png" alt="Facebook"></img></a>
                <a href="https://www.twitter.com"><img src="./img/twitter.png" alt="Twitter"></img></a>
                <a href="https://www.instagram.com"><img src="./img/instagram.png" alt="Instagram"></img></a>
            </div>
            <div class="flexbox">
                <a id="source-click" onclick="toggleSources()">+ Sources</a>
                <div id="copyright">© Footwear Inc. 2020. All Rights Reserved.</div>
            </div>
            <div id="source">
                <ul>
                    <li class="sources animateHidden">
                        <a href="https://www.health.harvard.edu/staying-healthy/10-tips-for-finding-the-right-shoes">10
                            Tips for Finding the Right Shoes - Harvard</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.fairview.org/patient-education/40049">Choosing the Right Shoes for Comfort
                            - Fairview</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.webmd.com/fitness-exercise/features/how-choose-athletic-shoes#1">How to
                            Choose Atheletic Shoes - WebMD</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>
<script src="./json/blog.js"></script>