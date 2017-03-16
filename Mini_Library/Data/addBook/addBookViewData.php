<?php

namespace Data\addBook;


class addBookViewData
{

    private $genres;
    private $languages;

    public function getGenres() :array
    {
        return $this->genres;
    }


    public function getLanguages() : array
    {
        return $this->languages;
    }

    public function addGenres($genre){

        $this->genres[]=$genre;
    }

    public function addLaguages($language){

        $this->languages[] = $language;
    }

}