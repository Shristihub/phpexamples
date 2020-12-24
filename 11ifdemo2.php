<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.html"?>  
<form action="11ifdemo2.php" method="get">
    Marks<input type="text" name="mark1" ><br>
    Marks<input type="text" name="mark2" ><br>
    Marks<input type="text" name="mark3" ><br>
    <input type="submit" value="Show Grade">
</form>
  <?php
    $mark1 = $_GET['mark1'];
    $mark2 = $_GET['mark2'];
    $mark3 = $_GET['mark3'];
    $sum = $mark1+$mark2+$mark3;
    $avg = $sum/3;
    if($mark1==''||$mark2==''||$mark3==''){
      echo 'Please enter the numbers';
    }elseif($avg>90){
      echo "A+ grade. amazing...";
    }elseif($avg>80 && $avg<90){ 
      echo "B grade. very good...";
    }elseif($avg>70 && $avg<80){
      echo "C grade. Can do better...";
    }else{
      echo "F grade.Need more practice....";
    }  
   ?>

</body>
</html>