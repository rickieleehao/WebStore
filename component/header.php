<?php
    include 'login.php';
    session_start();
    // session_unset();
    // session_destroy();
?>

<section class = "topheader">
        <ul>
            <?php
            if (isset($_SESSION["email"])){
                echo $_SESSION["name"];
                echo "<span>|</span>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else{
                echo "<li>Join Us</li>";
                echo "<span>|</span>";
                echo<<<HTML
                <li onclick="document.getElementById('ID').style.display='block'" style="width:auto; cursor: pointer;">Sign In</li>
                HTML;
            }
            ?>
        </ul>  
</section>
<div class="headerWrapper">
    <div class="header">
        <a href="index.php"> <img id="logo" src="./img/web_iconMain.png" alt="footwearLogo"></a>
        <nav>
            <ul>
                <li><a href="shopping.php?category=Men">Men</a></li>
                <li><a href="shopping.php?category=Women">Women</a></li>
                <li><a href="shopping.php?category=Kids">Kids</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img id="cart" src="./img/Shopping-Cart-icon.png" alt="Cart"></a>
    </div>
</div>
