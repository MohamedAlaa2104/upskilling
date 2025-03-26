<?php
require_once "classeslab/book.php";
require_once "classeslab/Library.php";


$book1 = new Book(booktitle:"king of rangs",auther:"some one", ISBN:1,borrowed:0, returned:0,totalcount:3);
$alexlibrary = new Library(Book:$book1 );
$book1->borrowBook();
$book1->borrowBook();
$book1->borrowBook();
$book1->borrowBook();
$book1->borrowBook();
$book1->borrowBook();
$book1->returnBook();
$book1->returnBook();
$book1->returnBook();
$book1->returnBook();
$book1->returnBook();
$book1->gettotalcount();

$book1-> displayBookDetails();