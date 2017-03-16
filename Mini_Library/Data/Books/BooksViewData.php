<?php


namespace Data\Books;


class BooksViewData
{
    private $books;

    public function addBook(Book $book){

        $this->books[] = $book;

    }

    public function getBooks(): array
    {
        return $this->books;
    }
}