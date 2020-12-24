<?php
         session_start();
        $name = $_SESSION["username"];
        $message = $_SESSION["msg"];
?>
    <h2>Name: <?php echo $message; ?>  </h2>
    <h2>Gender:<?php  echo $name; ?> </h2>

 <?php  ?>