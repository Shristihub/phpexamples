<?php
  $books = array("A","B","C");
  $booksArray = array(
    new Book('Seven Habits',"Stephen","selfhelp",900,5,"good","./images/rose.jpg"),
    new Book('ikigai',"Stephen","selfhelp",900,5,"good","./images/waterfall.jpg"),
    new Book('Php in 10 days',"Hal","Technical",900,5,"good","./images/rose.jpg"),
    new Book('Java in 10 days',"Stephen","Technical",900,5,"good","./images/waterfall.jpg"),
    new Book('Many masters',"Peter","spiritual",900,5,"good","./images/rose.jpg"),
    new Book('Miracle',"Hal","Thriller",900,5,"good","./images/rose.jpg"),
    new Book('The Monk',"Robin","selfhelp",900,5,"good","./images/waterfall.jpg"),
    new Book('Morning Train',"Peter","Thriller",900,5,"good","./images/rose.jpg"),
    new Book('Leader with No title',"Robin","selfhelp",900,5,"good","./images/waterfall.jpg")
  );

class Book{
    public $title;
    public $author; // same and derived classes
    public $price;
    public $category;
    public $ratings;
    public $reviews;
    public $imgName;
    public function __construct($title,$author,$category,$price,$rating, $reviews,$imgName){
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
        $this->price = $price;
        $this->rating = $rating;
        $this->reviews = $reviews;
        $this->imgName = $imgName;

      }
    function __destruct(){
    //   echo "called at the end of the script";
    }
 }





?>