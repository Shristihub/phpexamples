<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        span{
            color: red;
        }
        </style>
    </head>
    <body>
     <?php
    // echo htmlspecialchars($_SERVER["PHP_SELF"]);
    //  echo preg_match("/(^[a-zA-Z0-9])*.{8,}$/","elluioPP90");
    //  echo preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/", "12Abc134");
        $nameerr=$passerr=$gendererr=$mobileerr="";
        $mobile = 0;
     if($_SERVER["REQUEST_METHOD"]=="POST" ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $gender= $_POST["gender"];
         if(empty($username))
           $nameerr="Name is required";
         if(empty($password))
            $passerr="password is required";
         if(!preg_match("/[A_Za-z0-9]*/",$password))  {
            $passerr = "Password should have upper lower and numbers";
         }    
         if(empty($mobile))
            $mobileerr="mobile is required";

         if(!isset($gender))
            $gendererr="gender is required";
    }
    ?>
    
    <form action="demo2.php" method="post">
    
    <!-- <form action='
    /*<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>*/
    ' method="post"> -->
    Username<input type="text" name="username" value=<?php echo $username; ?> >
    <span>*<?php echo $nameerr ?></span> <br>
    Password<input type="password" name="password" value=<?php echo $password; ?>>
    <span>*<?php echo $passerr ?></span> <br>
    Mobile<input type="number" name="mobile" value=<?php echo $mobile; ?>>
    <span>*<?php echo $mobileerr ?></span> <br>
    Gender <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <span>*<?php echo $gendererr ?></span> <br>
    <input type="submit" value="Add">
</form>
     <!-- <?php  ?> -->
<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>
    <h2>Name: <?php echo $_POST["username"]; ?>  </h2>
    <h2>Salary:<?php  echo ($_POST["salary"]+$_POST["bonus"]); ?> </h2>
    <h2>Mobile<?php  echo $_POST["mobile"]; ?> </h2>
 <?php } ?>
    </body>
</html>