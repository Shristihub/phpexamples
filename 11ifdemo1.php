<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="11ifdemo1.php" method="get">
    Number1<input type="text" name="num1" ><br>
    Number2<input type="text" name="num2" ><br>
    Operator<input type="text" name="op" ><br>
    <input type="submit" value="Calculate">
</form>
  <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];
    if($num1==''||$num2==''||$op==''){
      echo 'Please enter the numbers';
    }elseif($op=='+'){
      echo "Sum: ";
      echo $num1+$num2;
    }elseif($op=='-'){
      echo "Difference: ";
      echo $num1-$num2; 
    }elseif($op=='*'){
      echo "Product: ";
      echo $num1*$num2;  
    }else{
      echo 'Invalid Operator';
    }  
   ?>

</body>
</html>