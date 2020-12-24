<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   if($username!='' && $courseName !=''){
      echo "welcome $username<br>";
      echo "The selected course is:  $courseName<br>";
      echo "The duration is:  $duration<br>";
   }
   function greet($username){
     echo "Have a great day, $username";
   }
   ?>

</body>
</html>