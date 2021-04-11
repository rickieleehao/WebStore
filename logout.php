<?php
session_start();
session_destroy();
echo '<script type="text/javascript"> alert("You have successfully logged out.") </script>';
header("refresh:0; url=index.php");
?>
