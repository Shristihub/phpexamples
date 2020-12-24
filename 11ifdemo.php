<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="11ifdemo.php" method="get">
    <input type="text" name="username" >
    <input type="submit" value="Login">

  </form>
   <?php 
      $name=$_GET['username'];
      if($name == "Raju")
        echo "Welcome, $name";
      elseif($name!="")
        echo "Wrong User"
   
   ?>

</body>
</html>