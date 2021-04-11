<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/components.css">
  <link rel="stylesheet" href="./styles/faq.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
  <title>FAQ</title>
</head>

<body>
  <?php include "./component/header.php"; ?>
  <?php include "./component/navigator.php"; ?>

  <div class="faq_main">
    <h1>FAQ</h1>
  </div>
  <?php
      $conn = mysqli_connect('localhost', 'root', '', 'data');
      $sql = mysqli_query($conn, "SELECT question,answer FROM faq");
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
    acc[i].addEventListener("click", function () {
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