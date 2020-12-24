<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Regular Expressions</h2>
<?php 
 $txt = "Betty bought some bitter butter 1 day. Be She made it as bitter butter in 5 days";
 $pattern = "/tt/i";
 echo preg_match($pattern, $txt)."<br>"; //returns 1 if available
 echo preg_match_all($pattern, $txt)."<br>"; //returns the total count
 echo preg_replace("/itt/i", "ett", $txt)."<br>";

 echo strlen($txt)."<br>"; // count
 echo preg_match_all("/[abc]/i", $txt)."<br>"; // count
 echo preg_match_all("/[^abc]/i", $txt)."<br>"; // count not abc
 echo preg_match_all("/[0-9]/i", $txt)."<br>"; // count
 echo preg_match("/h*/i", $txt)."<br>"; // count atleast zero or more
 echo preg_match("/g?/i", $txt)."<br>"; // count zero or one occ
 echo preg_match("/b?/", $txt)."<br>"; // count zero or one occ
 echo preg_match("/x+/i", $txt)."<br>"; // count one or more occ
 echo preg_match_all("/^B/i", $txt)."<br>"; // start of sentence
 echo preg_match_all("/\bb/i", $txt)."<br>"; // word starting with b
 echo preg_match_all("/r\b/i", $txt)."<br>"; // word ending with b
 echo preg_match_all("/\s/i", $txt)."<br>"; // word ending with b

   ?>
</body>
</html>