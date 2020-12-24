<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    class Product{
        protected $name;
        protected $brand;
        protected $price;
        static $showroom = "ABC";
        public function __construct($name,$brand,$price){
            $this->name = $name;
            $this->brand=$brand;
            $this->price=$price;
        }
        
        function printDetails(){
            echo $this->name."<br>";
            echo $this->brand."<br>";
            echo $this->price."<br>";
            echo self::$showroom."<br>";
        }
         function saleItems(){
            echo "Sale for christmas";
        }

    }
     class Laptop extends Product{
        protected $accessories;
        public function __construct($name,$brand,$price,$accessories){
            parent::__construct($name,$brand,$price);
            $this->accessories  = $accessories;
        }
        function showAccessories(){
            foreach($this->accessories as $value)
                echo $value."<br>";
            echo parent::$showroom."<br>";
            // $this->saleItems();
        }
        // overriding
        function saleItems(){
            echo "Sale for christmas and newyear";
            parent::saleItems();// to call parent class method

        }
     }
     $laptop = new Laptop ("A","Samsung",9000,array("charger","cover"));
     $laptop->printDetails();
     $laptop->saleItems();
     $laptop->showAccessories();
     echo Product::$showroom."<br>";
    ?>
    </body>
</html>