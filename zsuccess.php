<?php
      session_start();// session started
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $gender= $_POST["gender"]; 
    $city= $_POST["city"]; 

  class User{
      private $firstName;
      private $password;
      private $mobile;
      private $gender;
      private $city;

      function __construct($firstName,$password,$mobile,$gender,$city){
        $this->firstName = $firstName;
        $this->password =$password;
        $this->mobile=$mobile;
        $this->gender=$gender;
        $this->city=$city;
      }
      public function get_name(){
          return $this->firstName;
      }
    }
    $user = new User($username,$password,$mobile,$gender,$city);
    $_SESSION["user"] =  $user;
    $_SESSION["uname"] =  $username;
    $_SESSION["msg"] =  "Products Page";
    $_SESSION["greetings"] =  "Merry Christmas";



?>







    <h2>Name: <?php echo $username; ?>  </h2>
    <h2>Gender:<?php  echo $gender; ?> </h2>
    <h2>Mobile<?php  echo $mobile; ?> </h2>
<a href="zproducts.php">Click here</a>

 <?php  ?>