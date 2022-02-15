<?php
class Movie 
{
    public $title;
    public $genre;
    public $year;
    public $duration;

    function __construct($title, $genre, $year, $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function setDuration($duration){
        $this->duration = $duration;
    }

    public function getDuration(){
        return $this->duration;
    }
}

$movie = new Movie('Avengers:Endgame', 'Fantascienza', '2019', '181m');
$movie2 = new Movie('Black Panther', 'Fantascienza', '2018', '134m');
var_dump($movie,$movie2);



