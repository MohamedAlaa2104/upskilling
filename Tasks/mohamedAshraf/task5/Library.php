<?php

class Library
{
    private $books = [];

    function __construct(private string $name)
    {
    }

    public function addBook(Book $book)
    {
        array_push($this->books, $book);
    }

    public function removeBook(Book $book)
    {
        $foundBookIndex = array_search($book, $this->books, true);
        array_splice($this->books, $foundBookIndex);
    }

    public function listBooks(): array
    {
        return $this->books;
    }
}