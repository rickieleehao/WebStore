<?php 
$conn = mysqli_connect('localhost','root','','data');
$query = "SELECT * FROM shoes_data";
$i=0;
if ($result = mysqli_query($conn,$query));{
    while($obj = mysqli_fetch_object($result)){
        $shoes[$i] = $obj;
        echo "<div class='card'>";
        echo "<img src='./img/Shoes/".$shoes[$i]->id."_1.jpg'style='width:70%''>";
        echo "<h1>".$shoes[$i]->name."</h1>";
        echo "<p class='price'>RM ".$shoes[$i]->price."</p>";
        echo "<p><button>Add to Cart</button></p>";
        echo "</div>";
        $i++;
    }        
}

$num = 0;
mysqli_close($conn);
?>

<script>
function buildTable2() {
    var table = document.getElementById('myTable2');
    var i = 0;
    for
    var row =
        `<tr>
            <td><?php echo $shoes[$num]->id?></td>
            <td><?php echo $shoes[0]->name?></td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>`
    table.innerHTML += row;
    <?php $num++;?>
}
</script>

<?php
if ($sql = $_GET["Men"])
xxx
xxx
xx

if ($sql = $_GET["All"])



?>