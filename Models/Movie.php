<?php

class Movie
{

    private $id;
    private $directorId;
    private $title;
    private $altTitle;
    private $year;

    public function __construct($movie_data = [])
    {

        if (isset($movie_data['id'])) {
            $this->id = $movie_data['id'];
            $this->directorId = @$movie_data['director_id'];
            $this->title = @$movie_data['title'];
            $this->altTitle = @$movie_data['alt_title'];
            $this->year = @$movie_data['year'];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAltTitle()
    {
        return $this->altTitle;
    }

    public function setAltTitle($altTitle)
    {
        $this->altTitle = $altTitle;
    }

    public function getDirectorId()
    {
        return $this->directorId;
    }

    public function setDirectorId($directorId)
    {
        $this->directorId = $directorId;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function toArray() {
        return [
            "id" => $this->getId(),
            "director_id" => $this->getDirectorId(),
            "title" => $this->getTitle(),
            "alt_title" => $this->getAltTitle(),
            "year" => $this->getYear()
        ];
    }
}
