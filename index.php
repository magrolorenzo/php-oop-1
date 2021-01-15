<?php
// Creare un file index.php in cui:
// è definita una classe ‘Movie’
//=> all'interno della classe sono dichiarate delle variabili d'istanza
//=> all'interno della classe è definito un costruttore
//=> all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative propriet

class Movie{
    public $title = "";
    public $year;
    public $rating = "NA";
    public $minutes;

    function __construct($_title, $_year, $_rating, $_minutes){

        // Assegnazione titolo
        $this->title = $_title;

        // Verifica e assegnazione anno
        if(!is_nan($_year) && $_year > 1850 && $_year < date("Y")){
            $this->year = $_year;
        };

        // Verifica e assegnazione voto da 1 a 10
        if(!is_nan($_rating) && $_rating >= 0 && $_rating < 10){
            $this->rating = $_rating;
        };

        // Verifica e assegnazione lunghezza film in minuti
        if(!is_nan($_minutes) && $_minutes > 0 ){
            $this->minutes = $_minutes;
        };
    };

    public funxtion getTitle(){
        return $this->$title;
    };
};

$movie_1 = new Movie("Pulp Fiction", 1994, 9, 154);

echo $movie_1->title;


?>
