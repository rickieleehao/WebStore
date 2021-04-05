<?php
$conn = mysqli_connect('localhost','root','','data');
$query = "SELECT * FROM shoes_data ORDER BY RAND() LIMIT 4";
if ($result = mysqli_query($conn,$query));{
    while($obj = mysqli_fetch_object($result)){
        echo "<div class = 'card'>";
        echo "<a href='itemPage.php?shoes=".$obj->id."'>";
        echo "<img src='./img/Shoes/".$obj->id."_1.jpg'>";
        echo "<div class='cardDesc'>";
        echo "<div class='name'>";
        echo "<p>".$obj->sub_category."</p>";
        echo "<h4>".$obj->name."</h4>";
        echo "</div>";
        echo "<p class='cardPrice'>RM ".$obj->price."</p>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
    }
}
mysqli_close($conn);
?>