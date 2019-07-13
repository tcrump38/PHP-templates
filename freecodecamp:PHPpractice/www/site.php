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

class Book{
    var $title;
    var $author;
    var $pages;

}
$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "JK Rowling";
$book1->pages = 400;

$book2 = new Book;
$book2->title = "Lord Of The Rings";
$book2->author = "JRR Tolkein";
$book2->pages = 700;

// echo $book1->author;
echo $book2->author;


?>



</body>
</html>