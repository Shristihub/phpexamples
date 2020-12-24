<?php

        session_start();// session started
        $username = $_POST["username"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $gender= $_POST["gender"]; 

    $_SESSION["username"] =  $username;
    $_SESSION["msg"] =  "welcome to our site";
    ?>
    <h2>Name: <?php echo $username; ?>  </h2>
    <h2>Gender:<?php  echo $gender; ?> </h2>
    <h2>Mobile<?php  echo $mobile; ?> </h2>
<a href="demo3.php">Click here</a>

 <?php  ?>