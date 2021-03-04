<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/testRickie.css">
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
            <div class="flexbox" id="infobox">
                <!-- Maybe need to make them clickable later-->
                <div id="author">By Koh Jun Dong | Published 12 June 2020</div>
                <div id="category">Category: Footwear</div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare quam ultricies nisi dignissim pellentesque. Aenean laoreet enim tempus purus laoreet, a tincidunt nisl fermentum. Sed turpis tellus, cursus eget neque sit amet, pellentesque feugiat metus. Phasellus tellus orci, ultricies et dapibus vel, ullamcorper ut est. Morbi tincidunt, dui a fringilla consectetur, nulla magna tincidunt nunc, ut viverra metus enim at lorem. Suspendisse volutpat feugiat lectus, non convallis nisi tempor sit amet. Aenean consequat ante mi, a dapibus magna pretium in. Integer eu ornare ipsum, a aliquam quam. Sed hendrerit eleifend fringilla. Phasellus porta magna urna, quis suscipit neque condimentum vitae. Phasellus blandit imperdiet aliquet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare quam ultricies nisi dignissim pellentesque. Aenean laoreet enim tempus purus laoreet, a tincidunt nisl fermentum. Sed turpis tellus, cursus eget neque sit amet, pellentesque feugiat metus. Phasellus tellus orci, ultricies et dapibus vel, ullamcorper ut est. Morbi tincidunt, dui a fringilla consectetur, nulla magna tincidunt nunc, ut viverra metus enim at lorem. Suspendisse volutpat feugiat lectus, non convallis nisi tempor sit amet. Aenean consequat ante mi, a dapibus magna pretium in. Integer eu ornare ipsum, a aliquam quam. Sed hendrerit eleifend fringilla. Phasellus porta magna urna, quis suscipit neque condimentum vitae. Phasellus blandit imperdiet aliquet.</p>
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
                        Source 1
                    </li>
                    <li class="sources animateHidden">
                        Source 2
                    </li>
                    <li class="sources animateHidden">
                        Source 3
                    </li>
                </ul>
            </div>
        </div>

        <?php include "./component/footer.php"; ?>

        <!-- to be separated to its own parts? -->
        <script type="text/javascript">
            function toggleSources() {
                var sourcebutton = document.getElementById("source-click");
                var sources = document.getElementsByClassName("sources");
                var number = sources.length;

                if (sourcebutton.innerHTML === "+ Sources") {
                    sourcebutton.innerHTML = "- Sources";
                    for (i = 0; i < number; i++) {
                        sources[i].classList.add('animateShow');
                        sources[i].classList.remove('animateHidden');
                    }
                } else {
                    sourcebutton.innerHTML = "+ Sources";
                    for (i = 0; i < number; i++) {
                        sources[i].classList.add('animateHidden');
                        sources[i].classList.remove('animateShow');
                    }
                }


            }
        </script>
</body>

</html>