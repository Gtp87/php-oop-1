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
// var_dump($movie,$movie2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Film</h1>
<ul>
    <li>Titolo: <?=$movie->getTitle()?></li>
    <li>Genere: <?=$movie->getGenre()?></li>
    <li>Anno: <?=$movie->getYear()?></li>
    <li>Durata: <?=$movie->getDuration()?></li>
</ul>

<h1>Film</h1>
<ul>
    <li>Titolo: <?=$movie2->getTitle()?></li>
    <li>Genere: <?=$movie2->getGenre()?></li>
    <li>Anno: <?=$movie2->getYear()?></li>
    <li>Durata: <?=$movie2->getDuration()?></li>
</ul>  
</body>
</html>



