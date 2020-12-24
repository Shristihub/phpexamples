<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  
         srand( microtime() * 1000000 );
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "/www/images/cater.jpg";
               break;
            
            case 2: $image_file = "/www/images/panda1.jpg";
               break;
            
            case 3: $image_file = "/www/images/rose.jpg";
               break;
            
            case 4: $image_file = "/www/images/waterfall.jpg";
               break;
         }
         echo "your pic : <img src=$image_file  heigh='200px' width=200px />";
      ?>
</body>
</html>