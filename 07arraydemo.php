<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $names = array('Ram',"Raj","Jack","John");
     echo $names;   // Array
     echo $names[2];
     $names[2] = 'Lucky';
     echo $names[2];
     $names[10] = 'Kumaran';
     echo $names[8];

     echo count($names);
     echo var_dump($names); 
              
     foreach( $names as $value ) {
        echo "Name is $value <br />";
     }
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
    ?>      
      

</body>
</html>