<?php  declare (strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $names = array("Raju","Helen","Zeenath","Abi");
 sort($names);//asc
 foreach($names as $val)
  echo $val ."<br>";
 rsort($names);// desc
  
 for($i=0;$i<count($names);$i++)
   echo $names[$i]."<br>";
 
 $courses = array("Java"=>1900,"python"=>800,"HTML"=>200,"CSS"=>400) ;
 asort($courses); // asc by values
 foreach ($courses as $cname => $price) {
    echo $cname. "  ". $price."<br>"; 
 }
 echo "<br>";
 ksort($courses); // asc by keys
 foreach ($courses as $cname => $price) {
    echo $cname. "  ". $price."<br>"; 
 }
 arsort($courses); // desc by values
 foreach ($courses as $cname => $price) {
    echo $cname. "  ". $price."<br>"; 
 }
 echo "<br>";
 krsort($courses); // desc by keys
 foreach ($courses as $cname => $price) {
    echo $cname. "  ". $price."<br>"; 
 }
?>
</body>
</html>