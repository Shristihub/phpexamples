<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="12switchdemo.php" method="get">
  select climate<select name="choice">
   <option value="select">--select--</option>
   <option value="Rainy">Rainy</option>
   <option value="Windy">Windy</option>
   <option value="Sunny">Sunny</option>
   <option value="Cold">Cold</option>
  </select>
  <input type="submit" value="Suggest">

</form>
  <?php
    $choice = $_GET['choice'];
    switch($choice){
    case 'Rainy':
      echo "Hot Coffe with Samosa ";
      break;
    case 'Windy':
      echo "Enjoy Playing ";
      break;
    case 'Sunny':
      echo "Enjoy Icecream ";
      break;
    case 'Cold':
      echo "Hot Soup and sleep ";
      break;
    default:
      echo 'Choose a choice';
    }
   ?>

</body>
</html>