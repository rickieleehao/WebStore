<?php 
if(isset($_SESSION["gender"])){
    $gender = $_SESSION["gender"];
    if ($gender == "F"){
        $gender_word = "Women";
    }else{
        $gender_word = "Men";
    }
}else{
    $gender = "default";
    $gender_word = "Men";
}
?>

<div class="btmheader <?php echo $gender?>">
    <div class="dropDown">
        <ul>
            <li class="sideMenu"><img id="navLogo" src="./img/nav_icon.png" alt="navLogo">
                <ul>
                    <li class="<?php echo $gender?>"><a href="./index.php">Home</a></li>
                    <li class="<?php echo $gender?>"><a href="shopping.php?category=All&sub=">Shop</a></li>
                    <li class="<?php echo $gender?>"><a href="./faq.php">FAQ</a></li>
                    <li class="<?php echo $gender?>"><a href="./aboutus.php">About Us</a></li>
                    <li class="<?php echo $gender?>"><a href="./contact.php">Contact Us</a></li>
                    <li class="<?php echo $gender?>"><a href="./blogselection.php">Blog</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>