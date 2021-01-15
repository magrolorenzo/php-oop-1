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
        if(is_numeric($_year) && $_year > 1850 && $_year < date("Y")){
            $this->year = $_year;
        } else{
            $this->year = "NA";
        };

        // Verifica e assegnazione voto da 1 a 10
        if(is_numeric($_rating) && $_rating >= 0 && $_rating <= 10){
            $this->rating = $_rating;
        }else{
            $this->rating = "NA";
        };

        // Verifica e assegnazione lunghezza film in minuti
        if(is_numeric($_minutes) && $_minutes > 0 ){
            $this->minutes = $_minutes;
        }else{
            $this->minutes = "NA";
        };
    }

    public function getInfos(){
        echo  "<p> *** Metodo getInfos() *** </p>";
        foreach ($this as $info_name => $info_value) {
            echo "<p> $info_name : $info_value </p>";
       }
    }

};

$movie_1 = new Movie("Pulp Fiction", 1994, 9, 154);
$movie_2 = new Movie("Interstellar", "2014", 9, 169);

echo "<p> Titolo:  $movie_1->title </p>";
echo "<p> Anno: $movie_1->year </p>";
echo "<p> Rating:  $movie_1->rating /10 </p>";
echo "<p> Lunghezza: $movie_1->minutes  minuti";

echo $movie_2-> getInfos();

?>
