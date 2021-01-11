<?php
 include "booksarray.php";

 global $bookList;
 $bookList = $booksArray;
 global $newBookList;
 $newBookList=array();

 function get_all(){
    global $bookList;
    return $bookList;
    }
  function get_by_author($author){
     global $bookList;
     global $newBookList;
     foreach($bookList as $book){
       if ($book->author==$author) {
                $title = $book->title;
                $author = $book->author;
                $category = $book->category;
                $price = $book->price;
                $rating = $book->ratings;
                $reviews = $book->reviews;
                $imgName = $book->imgName;
                $nbook = new Book($title,$author,$category,$price,$rating,$reviews,$imgName);              
                 array_push($newBookList,$nbook);
            }
        }
      return $newBookList;
    } 
  //  $list = get_by_author("Peter");
  //  foreach($list as $b){
  //    echo $b->title;
  //  }
  //  $list = get_all();
  //  foreach($list as $b){
  //    echo $b->title;
  //  }
?>
