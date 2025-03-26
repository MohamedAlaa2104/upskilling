<?php

require_once "./Library.php";

class Book
{
    function __construct(
        private string $title,
        private string $author,
        private string $ISBN,
        private bool $isAvailable = true
    ) {
    }

    public function borrowBook()
    {
        if (!$this->isAvailable) {
            echo "This book is not available.";
            return;
        }
        $this->isAvailable = false;
    }
    public function returnBook()
    {
        if ($this->isAvailable) {
            echo "This book is already available.";
            return;
        }
        $this->isAvailable = true;

    }
    public function checkAvailability(): bool
    {
        return $this->isAvailable;
    }

    public function getDetails()
    {
        echo "Book name: {$this->title}, Author: {$this->author}, ISBN: {$this->ISBN}, Available: " . ($this->isAvailable ? "Yes" : "No");
    }

    public function getISBN(): string
    {
        return $this->ISBN;
    }
}

$book1 = new Book("abc", "ahmed mohamed", "1234");
$book2 = new Book("hello school", "John Doe", "654686");

$book1->borrowBook();
$book1->returnBook();
$book1->borrowBook();
$book1->getDetails();

$library = new Library("ABC");
$library->addBook($book1);
$library->addBook($book2);

$library->removeBook($book2);

echo "</br>";
print_r($library->listBooks());