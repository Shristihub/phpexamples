<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    class Vehicle{
      private $name;
      private $brand;
      private $price;
      const MSG = 'List of cars';
      static $showroom = "ABC limited";
      
      function __construct($name,$brand,$price){
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
      }
      function print(){
        echo self::MSG."<br>";
        echo self::$showroom;
      }
      
      function get_name(){
        return $this->name;
      }
      function set_name($name){
        $this->name = $name;
      }
      function get_brand(){
        return $this->brand;
      }
      public static function greet(){
        echo "welcome to world of cars";
      }
    }
      $car = new Vehicle("Civic","Honda",90000);
      echo $car->get_brand();
      echo $car->get_name();
      $car->set_name("City");
      echo $car->get_name();
      // echo $car->name;
      echo Vehicle::MSG."<br>";
      echo $car->print();
      echo Vehicle::greet();
   ?>

</body>
</html>