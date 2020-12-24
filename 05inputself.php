<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_GET["username"];
    $salary = $_GET["salary"];
    $bonus = $_GET["bonus"];
    if($username==''&&$salary==''&&$bonus==''){
    ?>

    <form action="<?php $_PHP_SELF ?> " method="get">
        Username<input type="text" name="username" >
        Salary<input type="number" name="salary" >
        Bonus<input type="number" name="bonus" >
        <input type="submit" value="Add">
    </form>
 <?php  } ?>

  <?php 
    if($username||$salary||$bonus){ ?>
      <h2>Name: <?php echo $username; ?>  </h2>
      <h2>Salary:<?php  echo $salary+$bonus; ?> </h2>

    <?php } ?>

   
   

</body>
</html>

