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
    $fileline = fgets($file); // reads one single line. Pointer moves to next line
    $filecharacter = fgetc($file); // reads one character. Pointer moves to next line
    fclose($file);

    echo "File size: $filesize";
    echo "<h3>$fileline</h3>";
    echo "<h3>$filecharacter</h3>";
    ?>
</body>
</html>