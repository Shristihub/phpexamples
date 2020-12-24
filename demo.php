<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

echo time()."<br>"; //current date
echo  date("Y-m-d",time())."<br>"; // 2020-12-21
echo  date("Y-m-d H:i:s",time())."<br>"; // 2020-12-21

$newdate =strtotime("1 day",time());
echo date("Y-m-d",$newdate)."<br>"; // 2020-12-22
$newdate =strtotime("1 month",time());
echo date("Y-m-d",$newdate)."<br>"; // 2021-12-21

// with slash give full year in 4digits(y/m/d)
$newdate =strtotime("1 year",strtotime("2011/12/20"));
echo date("Y-m-d",$newdate)."<br>";; // 2012/12/20

$newdate =strtotime("1 year",strtotime("2011-12-20"));
echo date("Y-m-d",$newdate)."<br>"; // 2012/12/20

// with slash give full year in 4digits(m/d/y)
$newdate =strtotime("1 year",strtotime("11/30/20"));
echo date("Y-m-d",$newdate)."<br>"; // 2021/11/30

$newdate =strtotime("1 year",strtotime("11-10-20"));
echo date("Y-m-d",$newdate)."<br>";; // 2012/10/20


?>
</body>
</html>