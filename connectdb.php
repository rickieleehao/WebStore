<?php
// $conn = mysqli_connect('localhost','root','');
// if (!$conn) 
//     echo "Error!! Local MySQL is not connected!!";
// else
//     echo "MySQL successful connected!";
?>


<?php
$conn = mysqli_connect('localhost','root','','data');
$query = "SELECT * FROM shoes_data ORDER BY RAND() LIMIT 4";
$i = 0;
if ($result = mysqli_query($conn,$query));{
    while($obj = mysqli_fetch_object($result)){
        $shoes[$i] = $obj;
    }   
    // while ($row = mysqli_fetch_assoc($result)){
        // $shoes[$i] = array(
        //     $row["id"], //0
        //     $row["name"], //1
        //     $row["sub_category"], //2
        //     $row["price"], //3
    //     );       
    //     $i++;
    // }
}
echo $shoes[0]->id;
echo $shoes[0]->name;
echo $shoes[0]->price;
echo $shoes[1]->id;
echo $shoes[1]->name;
echo $shoes[1]->price;
mysqli_close($conn);
?>