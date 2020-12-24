<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php 
   $file_name = "../www/files/trial.txt";
   $file = fopen($file_name,'a');
   
   if(file_exists($file_name)){
      fwrite($file,"Have a great day \n");
      fclose($file); 
   }else{
       echo "Error creating a file";
   }
   $file = fopen($file_name,"r");
   $filesize= filesize($file_name);
   $filecontent= fread($file,$filesize);
   fclose($file); 
   
   echo "<pre>$filecontent</pre>"
   
   ?>
</body>
</html>