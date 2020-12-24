<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    class Book{
      private $title;
      protected $author; // same and derived classes
      public $price;
      public $category;

      public function __construct($tit,$author){
        $this->title = $tit;
        $this->author = $author;
      }
      function __destruct(){
        echo "called at the end of the script";
      }
    }
    $book  = new Book("Java in action","Kathy");
    // echo $book->title;
    echo $book->author;
   ?>

</body>
</html>