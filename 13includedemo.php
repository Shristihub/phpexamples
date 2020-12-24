<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.html" ?>
<form action="13includedemo.php" method="get">
Enter Name<input type="text" name="username" ><br>
select course<select name="choice">
   <option value="select">--select--</option>
   <option value="Java">Java</option>
   <option value="Python">Python</option>
   <option value="Angular">Angular</option>
   <option value="Node">Node</option>
  </select>
  <input type="submit" value="Suggest">

</form>
  <?php
    $courseName = $_GET['choice'];
    $username = $_GET['username'];
    $duration = '20hours';
    include '13includedetails.php';
    greet($username);
   ?>

</body>
</html>