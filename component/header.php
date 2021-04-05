<?php
    session_start();
    include 'login.php';  
?>

<section class = "topheader">
        <ul>
            <?php
            if (isset($_SESSION["email"])){
                echo $_SESSION["name"];
                echo "<span>|</span>";
                echo "<a href='logout.php'><li>Logout</li></a>";
            }
            else{
                echo "<a href='register.php'><li>Join Us</li></a>";
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
