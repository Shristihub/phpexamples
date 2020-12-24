<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <?php
       $greeting = 'Have a great day<br>';
       echo strtoupper($greeting),"<br>";
       echo strlen($greeting),"<br>";
       echo $greeting[2],"<br>";
       echo "Kumaran"[0],"<br>";
       echo strpos($greeting, "a"); // get the position 1
       echo strpos($greeting, "a",7); // start the search from 7 pos 10
           $greeting[0] = 'L';
       echo $greeting,"<br>";
       str_replace('great','good',$greeting);
       echo $greeting;
       $ngreet = substr($greeting,7);
       echo $ngreet,"<br>";
       echo substr($greeting,7,5);
      
      ?>
    </body>
</html>