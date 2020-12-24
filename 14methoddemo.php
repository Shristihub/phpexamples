<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    class Employee{
      public $name;
      public $dept;
      public $salary;
      protected $city;

      function __construct($name,$dept,$city,$salary){
        $this->name = $name;
        $this->city = $city;
        $this->dept = $dept;
        $this->salary = $salary;
      }
      function printDetails(){
        echo "Name: $this->name<br>";
        echo "City: $this->city<br>";
        echo "Salary: $this->salary<br>";
        echo "Department: $this->dept<br>";
      }
    }
      $emp1 = new Employee('Raju','Admin','Bangalore',9000);
      $emp1->printDetails();

      $emp2 = new Employee('Koyal','Mktg','Bangalore',20000);
      $emp2->printDetails();
      echo $emp2->city;
    
   ?>

</body>
</html>