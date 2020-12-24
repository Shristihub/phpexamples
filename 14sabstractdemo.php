<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    abstract class Product{
        protected $name;
        protected $brand;
        protected $price;
        public function __construct($name,$brand,$price){
            $this->name = $name;
            $this->brand=$brand;
            $this->price=$price;
        }
        function printDetails(){
            echo $this->name."<br>";
            echo $this->brand."<br>";
        }
        abstract function showDiscountedPrice();
        abstract function printAccessories();
    }
     class Laptop extends Product{
        protected $accessories;
        public function __construct($name,$brand,$price,$accessories){
           parent::__construct($name,$brand,$price);
            $this->accessories  = $accessories;
        }
        function printAccessories(){
            foreach($this->accessories as $value)
                echo $value."<br>";
        }
        function showDiscountedPrice(){
            echo "price slashed";
        }
     }
     $laptop = new Laptop ("A","Samsung",9000, array("charger","cover"));
     $laptop->printDetails();
     $laptop->printAccessories();




     
    
     


    ?>
    </body>
</html>