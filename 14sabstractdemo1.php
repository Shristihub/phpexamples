<?php
    abstract class Vehicle{
        protected $model;
        protected $brand;
        protected $price;
        public function __construct($model,$brand,$price){
            $this->model = $model;
            $this->brand=$brand;
            $this->price=$price;
        }
        function printDetails(){
            echo $this->model."<br>";
            echo $this->brand."<br>";
            echo $this->price."<br>";
        }
        abstract function getMileage();
        abstract function printAccessories();
    }
     class Bike extends Vehicle{
        protected $accessories;
        protected $color;
        public function __construct($model,$brand,$price,$accessories,$color){
           parent::__construct($model,$brand,$price);
            $this->accessories  = $accessories;
            $this->color= $color;
        }
        
        function printAccessories(){
            foreach($this->accessories as $value)
                echo $value."<br>";
        }
        function getMileage(){
            return "40Kms";
        }
     }
     class Car extends Vehicle{
        protected $type;
        protected $color;
        public function __construct($model,$brand,$price,$type,$color){
           parent::__construct($model,$brand,$price);
            $this->type  = $type;
            $this->color= $color;
        }
        function printAccessories(){
           echo "MusicSystem<br>";
        }
        function getMileage(){
            return "12Kms";
        }
     }
     switch ($vehicle) {
        case 'Bike':
            $bike = new Bike ("BX450","Harley",900000, array("Helmet","Seat Cover"),"black");
            $bike->printDetails();
            $bike->printAccessories();
            echo $bike->getMileage();
            break;
        case 'Car':
            $car = new Car ("CX23","Audi",18290000, "AC","white");
            $car->printDetails();
            $car->printAccessories();
            echo $car->getMileage();
     }
        


     
    
     


    ?>
    </body>
</html>