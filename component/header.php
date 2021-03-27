<?php
    include 'login.php';
    session_start();
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
                <li onclick="document.getElementById('ID').style.display='block'" style="width:auto;">Sign In</li>
                HTML;
            }
            ?>
        </ul>  
</section>
<div class="headerWrapper">
    <div class="header">
        <img id="logo" src="./img/web_iconMain.png" alt="footwearLogo">
        <nav>
            <ul>
                <li><a href="shoppingtest.php?category=Men">Men</a></li>
                <li><a href="shoppingtest.php?category=Women">Women</a></li>
                <li><a href="shoppingtest.php?category=Kids">Kids</a></li>
            </ul>
        </nav>
        <a href="#"><img id="cart" src="./img/Shopping-Cart-icon.png" alt="Cart"></a>
    </div>
</div>
