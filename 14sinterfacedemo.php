<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    interface Calculator{
      public function calculate($num1, $num2);
    }
    class Adder implements Calculator{
      public function calculate($num1, $num2){
        return $num1+$num2;
      }
    }
    class Multiplier implements Calculator{
      public function calculate($num1, $num2){
        return $num1*$num2;
      }
    }
    class Divider implements Calculator{
      public function calculate($num1, $num2){
        return $num1/$num2;
      }
    }
    $sum = new Adder();
    echo "Sum: ". $sum->calculate(10,20)."<br>";
    $product = new Multiplier();
    echo "Product: ". $product->calculate(10,20)."<br>";
    $quotient = new Divider();
    echo "Quotient: ". $quotient->calculate(40,2)."<br>";
   ?>

</body>
</html>