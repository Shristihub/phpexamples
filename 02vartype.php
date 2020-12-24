<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
     $num=100;
     $fnum =10.5;
     $flag =true;
     $name = "Kumaran";
     $names = array("Raju","Rohan");
    
     // datatype and value
     echo var_dump($num),"<br>";
     echo var_dump($fnum),"<br>";
     echo var_dump($flag),"<br>";
     echo var_dump($name),"<br>";
     echo var_dump($names),"<br>";

     // To check the datatype
    echo is_int($num);
    echo var_dump(is_int($num));
    echo var_dump(is_int($fnum));
    echo var_dump(is_float($fnum));
    echo var_dump(is_array($names));
      echo "<br>";
    // type casting 
    $nnum = (int) $fnum;
    echo $nnum ."<br>";
    echo var_dump($nnum)."<br>";

    $snum = "1000";
    $nnum = (int)$snum;
    echo $nnum."<br>";
    echo var_dump($nnum)."<br>";

    //to check if it is a numerical value
    echo is_numeric(90)."<br>";
    echo is_numeric("600")."<br>"; // true
    echo is_numeric(10.35)."<br>";
    echo is_numeric("hello")."<br>"; //no o/p
    echo is_string("hello")."<br>";
    echo is_string("600")."<br>";
   ?>



   
   

</body>
</html>

