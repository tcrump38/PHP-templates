<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    





<?php 
//Class
class Book{
    var $title;
    var $author;
    var $pages;
    //constructor
    function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
    }

}

//book 1 Object
$book1 = new Book("Harry Potter", "JK Rowling", 400);
// $book1->title = "Harry Potter";
// $book1->author = "JK Rowling";
// $book1->pages = 400;

//book 2 Object
$book2 = new Book("Lord of The Rings", "JRR Tolkein", 700);
// $book2->title = "Lord Of The Rings";
// $book2->author = "JRR Tolkein";
// $book2->pages = 700;

echo $book2->pages;


?>



</body>
</html>