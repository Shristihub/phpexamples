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
    $file = fopen($file_name,'r');
    if(file_exists($file_name)){
        $filesize= filesize($file_name);
        $filecontent = fread($file,$filesize);
        fclose($file);

        echo "File size: $filesize";
        echo "<pre>$filecontent</pre>";
    } else{
        echo "File does not exists";
        exit();
    }
    ?>
</body>
</html>