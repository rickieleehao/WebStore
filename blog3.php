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
    <title>Blog - Taking Care of Your Shoes</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="blog-content">
        <h1>Taking Care of Your Shoes</h1>
        <h2>Shoes need some lovin' too</h2>
        <div class="blog-crop">
            <img src="./img/blog/shoe-care-1.jpg" alt="Image of someone polishing a leather shoe">
        </div>
        <div class="flexbox" id="infobox">
            <div id="author">By Koh Jun Dong | Published 25 December 2020</div>
            <div id="category">Category: Footwear</div>
        </div>
        <div class="blog-text">
            <div class="blog-section">
                <p>Shoes take on the abusive tasks of protecting us from the ground, whether heat, cold, moisture or
                    potential hazards. </p>
                <p>However, most of us don't pay attention to the very shoes that protected us.</p>
            </div>
            <h3>Why you should take care of your shoes</h3>
            <div class="blog-section">
                <p>Shoes aren't the cheapest apparel to buy or own. A good pair of leather shoes or sneakers can cost
                    upwards of 800 MYR. </p>
                <p>Shoes may not need much maintenance, but a little care goes a long way to extend their lifespan.
                    Protecting your shoes means fewer cracks, damage, or smell. Eventually, this leads to a cleaner
                    cabinet, healthier feet and spending less.</p>
            </div>
            <h3>Dos:</h3>
            <div class="blog-section">
                <ul class="blog-list">
                    <li>Keep your shoes away from moisture by using desiccants and stuff them with newspaper.</li>
                    <li>Use a shoe tree. A shoe tree is an insert to help maintain the shoes' shape.</li>
                    <li>For leather shoes, use polish and shiner.</li>
                    <li>For suede shoes, sponge and clean gently with a shampoo formulated for suede. Use a suede
                        conditioner.</li>
                    <li>Keep the soles clean, tap the shoes to get rid of the dust, and use a brush to deep clean.</li>
                    <li>For ageing shoes, use hydrogen peroxide and baking soda to rejuvenate them. Apply and brush
                        lightly with a toothbrush.</li>
                </ul>
            </div>
            <h3>Don'ts:</h3>
            <div class="blog-section">
                <ul class="blog-list">
                    <li>Expose your shoe under direct sunlight.</li>
                    <li>Wear the same shoes all the time. Shoes need downtime to breathe.</li>
                    <li>Put your shoes into a dark closet right after you take them off. Shoes need airing out before
                        being stored.</li>
                    <li>Leave your shoes unused for extended periods. Shoes should be worn!</li>
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
                        <a href="https://www.dmodot.com/blogs/shblog/here-are-5-ways-to-take-care-of-your-shoes-during-the-lockdown-right-from-the-comfort-of-your-home">10
                            Ways to Take Care of your Shoes - dmodot</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.marthastewart.com/1136215/how-take-care-your-shoes-keep-looking-new">How to
                            Take Care of Your Shoes - Martha Stewart</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.realsimple.com/beauty-fashion/shoes-accessories/shoes/care-for-shoes">How
                            to Care for Your Shoes - Real Simple</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.clozette.co/article/how-to-take-care-of-the-shoes-you-dont-wear-7326">How
                            To Take Care Of The Shoes You Don't Wear - Clozette</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>
<script src="./js/blog.js"></script>