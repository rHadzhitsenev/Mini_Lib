<?php

namespace Services\Books;


use Adapter\DatabaseInterface;
use Data\Books\Book;
use Data\Books\BooksViewData;

class BooksService
{
    /** @var  DatabaseInterface */

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    function getBooksViewData(): BooksViewData
        {
            /** @var BooksViewData $booksViewData */
            $booksViewData = new \Data\Books\BooksViewData();

            $query="
SELECT 
	b.id,
	l.name AS language,
	g.name AS genre,
	b.author,
	b.`comment` AS comment,
	b.year_of_release AS year,
	b.title AS title
	
FROM books AS b
INNER JOIN
languages AS l
ON
	b.language_id=l.id
INNER JOIN
genres as g
ON
	b.genres_id=g.id
	
	";


            $stmt = $this->db->prepare($query);
            $stmt->execute();

            while ($book = $stmt->fetchObject(Book::class)){
                $booksViewData->addBook($book);

            }
                return $booksViewData;
        }

}