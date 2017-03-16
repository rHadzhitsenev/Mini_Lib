<?php

namespace Data\Books;


class Book

{
    private $id;
    private $language;
    private $author;
    private $year;
    private $genre;
    private $comment;
    private $title;


    public function getId()
    {
        return $this->id;
    }


    public function getLanguage()
    {
        return $this->language;
    }


    public function getAuthor()
    {
        return $this->author;
    }


    public function getYear()
    {
        return $this->year;
    }


    public function getGenre()
    {
        return $this->genre;
    }


    public function getComment()
    {
        return $this->comment;
    }

    public function getTitle()
    {
        return $this->title;
    }



}