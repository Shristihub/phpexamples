<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $username = $_POST["username"];
      $salary = $_POST["salary"];
      $bonus = $_POST["bonus"];
    
     if($username==''||$salary==''||$bonus==''){ ?>
    
    <form action="<?php ($_server["PHP_SELF"]); ?> " method="post">
        Username<input type="text" name="username" >
        <?php if($_SERVER["REQUEST_METHOD"]=="POST" && empty($username))
                echo "name is required";
        ?>
        Salary<input type="number" name="salary" >
        Bonus<input type="number" name="bonus" >
        <input type="submit" value="Add">
    </form>
 <?php  } ?>

  <?php 
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>
      foreach($_POST)
      <h2>Name: <?php echo $username; ?>  </h2>
      <h2>Salary:<?php  echo $salary+$bonus; ?> </h2>
    <?php } ?>

   
   

</body>
</html>

