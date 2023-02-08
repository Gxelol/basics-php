<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    class Book{
      var $title;
      var $author;
      var $pages;
    }

    $book1 = new Book;

    $book1 -> title = "The Great Harbor";
    $book1 -> author = "Unknown";
    $book1 -> pages = 1000;
    
    
    $book2 = new Book;

    $book2 -> title = "The Plague";
    $book2 -> author = "Jr TgO";
    $book2 -> pages = 479;

    echo $book1->title;
    echo "<br>";
    echo $book2->title;
  ?>

</body>
</html>