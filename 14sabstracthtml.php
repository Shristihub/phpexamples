<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        Enter Name<input type="text" name="username" ><br>
        select vehicle<select name="choice">
            <option value="select">--select--</option>
            <option value="Bike">Bike</option>
            <option value="Car">Car</option>
        </select>
        <input type="submit" value="Suggest">
    </form>
   <?php
    $vehicle = $_GET['choice'];
    $username = $_GET['username'];
    echo "<h2>Welcome $username</h2>";
    include"14sabstractdemo1.php";

    ?>
    </body>
</html>