<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 

    function sayHi ($name,$city) {
        echo "Hi", $name."welcome to $city<br>";
    }
    sayHi("Dave","Bangalore");
    
    function sum($num1,$num2){
         return $num1+$num2;
     }
   $result = sum(10,20);
   echo "Sum is $result";
   // loosely type language use strict
   $result = sum(10, "20apples"); // convert 20apples to 20
   $result = sum(10, 10); 
   echo "Sum is $result";
   function product(int $num1,int $num2=90 ){
    return $num1*$num2;
   } 
   echo "Product".product(20);
 
 function showNum($num){
     $num = $num*5;
     echo $num;
 }
 $num = 90;
   ?>

</body>
</html>