<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="08checkdemo.php" method="get">
        Hobbies: <br>
        Sports<input type="checkbox" name="hobby[]" value="sports" ><br>
        Music<input type="checkbox" name="hobby[]" value="music"><br>
        Dance<input type="checkbox" name="hobby[]" value="dance"><br>
        Reading<input type="checkbox" name="hobby[]" value="reading"><br>
        <input type="submit" value="Show"><br>
    </form>
    <h2>Hobbies: 
    <?php 
    $hobb = $_GET["hobby"] ;
    echo  $hobb[0]; 
    echo  $hobb[1]; 
    
    ?></h2>
</body>
</html>