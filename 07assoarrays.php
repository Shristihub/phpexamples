<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="09assoarrays.php" method="get">
    Enter name <input type="text" name="studname" >
    <input type="submit" value="Show Marks">
</form>
<h2>
   <?php
    $studgrades = array("Jack"=>90,"Kathy"=>80,"Helen"=>90);
    echo $studgrades["Kathy"],"<br>";
    $studentName = $_GET["studname"];
    echo $studgrades[$studentName];
    echo $studgrades[$_GET["studname"]];


   
   
   ?></h2>
</body>
</html>