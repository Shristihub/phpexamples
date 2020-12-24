<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06exprdemo.php" method="post">
        Color<input type="text" name="color" >
        Fruit<input type="text" name="fruit" >
        Hobby<input type="text" name="hobby" >
        <input type="submit" value="Add">
    </form>
    <h3>
        <?php
        $color = $_POST["color"];
        $fruit = $_POST["fruit"];
        $hobby = $_POST["hobby"];
        echo "My favorite color is ${color}<br>" ;
        echo "My favorite fruit is ${fruit}<br>" ;
        echo "My favorite hobby is ${hobby}<br>" ;
        ?>
    </h3>
</body>
</html>