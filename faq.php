<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/faq.css">
    <link rel="stylesheet" href="./styles/components.css">
</head>
<body>
  <?php include "./component/header.php"; ?>
  <?php include "./component/navigator.php"; ?>
     
  <p>FAQ</p>
    <?php
      $conn = mysqli_connect('localhost', 'root', '', 'data');
      $sql = mysqli_query($conn, "SELECT question,answer FROM faq");
      mysqli_fetch_all($sql, MYSQLI_ASSOC);
      $i =1;
      foreach($sql as $row) {
        echo '<div class="faq">', $i , ") ",$row['question'], '</div>';
        echo '<div class="panel">', $row['answer'], '</div>';
        $i++;
      }
    ?>    
    <?php include "./component/footer.php"; ?>
</body>
</html>

<script>
var acc = document.getElementsByClassName("faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>