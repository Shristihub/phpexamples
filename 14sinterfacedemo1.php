<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    abstract class Employee{
        protected $name;
        protected $salary;
        public function __construct($name,$salary){
            $this->name = $name;
            $this->salary=$salary;
        }
        function printDetails(){
            echo $this->name."<br>";
            echo $this->salary."<br>";
        }
        abstract function showHobbies();
    }
    interface BonusCalculator {
        function calcBonus($bonus);
        function calcInterest($loanamunt);
    }
    abstract class Manager extends Employee implements BonusCalculator {
        protected $dept;
        public function __construct($name,$salary,$dept){
           parent::__construct($name,$salary);
            $this->dept  = $dept;
        }
        function calcBonus($bonus){
                echo "Bonus: ".($this->salary+$bonus)."<br>";
        }
        function calcInterest($loanamount){
            echo "Interest: ".($this->salary-$loanamount)."<br>";
    }
}
class Programmer extends Manager {
    
    function showHobbies(){
        echo "hobbies";
    }
    function calcBonus($bonus){
        echo "Bonus: ".($this->salary*$bonus)."<br>";
}
    function calcInterest($loanamount){
        echo "Interest: ".($this->salary+$loanamount)."<br>";
    }
   
}
  
     $emp= new Programmer ("A",200,"Admin");
     $emp->printDetails();
     $emp->calcBonus(20);
     $emp->calcInterest(100);



    ?>
    </body>
</html>