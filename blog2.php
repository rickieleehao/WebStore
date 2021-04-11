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
    <title>Blog - The History of Shoes</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>
    <div class="blog-content">
        <h1>The History of Shoes</h1>
        <h2>How Modern Shoes Came To Be</h2>
        <div class="blog-crop">
            <img src="./img/blog/history-of-shoes.jpg" alt="Image of historical footwear">
        </div>
        <div class="flexbox" id="infobox">
            <div id="author">By Koh Jun Dong | Published 20 July 2020</div>
            <div id="category">Category: Footwear</div>
        </div>
        <div class="blog-text">
            <div class="blog-section">
                <p>Our shoes today comes with a long and fascinating history. Borne out of necessity, they protect our
                    feet from the elements and hazards.</p>
                <p>It was not until the modern era where the shoe came to be the fashion and prestige statement today.
                </p>
            </div>
            <h3>Antiquity</h3>
            <div class="blog-section">
                <p>One of the oldest known shoes are sandals, made from sagebrush bark that dates back to 7000 BC. </p>
                <div class="blog-crop">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Chalcolithic_leather_shoe_from_Areni-1_cave.jpg"
                        alt="Armenia Leather Shoe from 3300 BCE"></img>
                    <p class="blog-caption">The shoe, as pictured above, is thought to date back around 3300 BCE.</p>
                </div>
                <p>The oldest known leather shoe, made from cowhide and laced with leather, was found in Armenia in
                    2008.</p>
                <p>Researchers suspect that shoes were prevalent before this period, but due to the perishable materials
                    used, it is hard to find evidence of earlier footwears.</p>
            </div>
            <h3>Ancient Greek & Roman</h3>
            <div class="blog-section">
                <p>The Ancient Greeks didn't necessarily saw footwear as essential. The Greeks mostly saw shoes as
                    self-indulgent and unaesthetic.</p>
                <p>Many preferred to go barefoot. Furthermore, participants of the Ancient Olympic Games were barefoot
                    -- and naked, too.</p>
                <p>It wasn't until the Ancient Roman era that footwear became prevalent. The Roman regarded footwears as
                    a necessity of living in a civilised world. </p>
                <div class="blog-crop">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Romanwallinscotl00macduoft_raw_0263.png"
                        alt="Shoes from Bar Hill on the Antonine Wall"></img>
                    <p class="blog-caption">Pictured above (from left to right) are shoes for Roman men, women and
                        children.</p>
                </div>
            </div>
            <h3>Middle Ages</h3>
            <div class="blog-section">
                <div class="blog-crop">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/TurnShoe.JPG"
                        alt="Turnshoe replica"></img>
                    <p class="blog-caption">Pictured above is a replica of a turnshoe.</p>
                </div>
                <p>he Middle Ages sees shoes made using the turnshoe method. The turnshoe was named this way because it
                    was constructed inside-out and then turned right-side-out when completed.</p>
                <p>By the 1500s, the welted rand method had replaced the turnshoe method. The welted rand method sees
                    stiffer sole used. The sole offered better protection, and shoemakers sew the uppers part of the
                    shoes to the sole. However, shoes made this way were not tuned to each foot and are known as
                    "straights".</p>
                <div class="blog-crop">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Jan_van_Eyck_004.jpg"
                        alt="Crop of the painting The Arnolfini Portrait"></img>
                    <p class="blog-caption">Patten are the precursors to high heels.</p>
                </div>
                <p>Pattens, during this era, became popular amongst Europeans. Their designs were the precursor for
                    modern high-heels.</p>
                <p>Additionally, heels were common during this era. In 17th century France, Louis XIV of France even
                    banned everyone from wearing red heels, except for himself and his royal court.</p>
            </div>
            <h3>Industrial Era & Modern Era</h3>
            <div class="blog-section">
                <p>The Industrial Revolution brought about one of the most significant changes in shoemaking. In the
                    early 19th century, traditional handicraft made up the majority of the shoemaking industry. However,
                    the process was almost fully mechanised by the end of the century. British soldiers are some of the
                    first to wear mechanically produced shoes during the Napoleonic Wars.</p>
                <p>1910 saw the development of AGO shoe, namely, stitchless glued-together shoes. Leather begins falling
                    out of fashion and is replaced by rubber and plastics.</p>
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
                        <a href="https://www.dolitashoes.com/blogs/news/the-history-and-evolution-of-shoes">The History
                            and Evolution of Shoes - Dolita Shoes</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://www.sioux-shop.co.uk/cms/shoe-know-how/the-history-of-footwear/">The History of
                            Footwear - Sioux Shop</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://en.wikipedia.org/wiki/Shoe">Shoes - Wikipedia</a>
                    </li>
                    <li class="sources animateHidden">
                        <a href="https://en.wikipedia.org/wiki/Patten_(shoe)">Patten (Shoes) - Wikipedia</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>

</html>
<script src="./json/blog.js"></script>