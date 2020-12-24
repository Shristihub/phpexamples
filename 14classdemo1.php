<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
     <?php
     class Employee{
        private $empName;
        public $salary;
        public $department;

        public function __construct($empName,$sal,$dept){
            $this->empName = $empName;
            $this->salary =$sal;
            $this->department=$dept;
        }
        public function __destruct(){
            echo "called before closing the script";
        }
        private function calcBonus($amount){
            return $this->salary+$amount;
        }
        public function showBonus($amount){
            echo "Bonus: ", $this->calcBonus($amount);
        }
        function printDetails(){
            echo $this->empName."<br>";
            echo $this->salary."<br>";
            echo $this->department."<br>";
        }    
     }
     $emp = new Employee("Ram",1000,"Admin");
     $emp->printDetails();
     $emp->showBonus(200);

     $emp1 = new Employee("Kumaran",8000,"Mktg");
     $emp1->printDetails();
     $emp1->showBonus(200);

    ?>
    </body>
</html>