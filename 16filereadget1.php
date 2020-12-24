<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- r,w,r+,w+,a,a+, x(creates new file for writing. returns false of file already exists),x+ -->
    <?php 
    $file_name = "../www/files/hello.txt";
    $file = fopen($file_name,'r') or die("unable to open file");
    $filesize= filesize($file_name);
    while(!feof($file)){
        $fileline = fgets($file); 
        echo "$fileline<br>";
    }
    fclose($file);
    echo "<br>";

    $file = fopen($file_name,'r') or die("unable to open file");
    while(!feof($file)){
        $filechar = fgetc($file); 
        echo $filechar;
        if($filechar=="."){
        echo "<br>";

        }
    }
 
    ?>
</body>
</html>