<?php

namespace Services\addBooks;


use Adapter\PDODatabase;
use Data\addBook\addBookViewData;

class addBooksService
{
    /** @var  PDODatabase */
    private $db;

    public function __construct($db)
    {
        $this->db = $db;

    }

    public function getAddBookViewData()
    {

        $viewData = new addBookViewData();

        $query = "SELECT id,name FROM languages";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        while ($language = $stmt->fetchRow()) {

            $viewData->addLaguages($language);
        }

        $query = "SELECT id ,name FROM genres";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        while ($genre = $stmt->fetchRow()){

            $viewData->addGenres($genre);


        }

        return $viewData;

    }

    public function addBook($language, $author, $year, $genre, $comment, $title){

        $quary = "INSERT INTO 
                         books
                         (title,author, year_of_release, comment, language_id, genres_id)
                         VALUES
                         (?,?,?,?,?,?)";

        $stmt= $this->db->prepare($quary);
        $stmt->execute([$title, $author, $year, $comment, $language, $genre]);

        header("Location: books.php");

    }

}