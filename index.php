<?php

class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno;

    public function __construct($_titolo, $_regista) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
    }
}


$speranza = new Movie("Una nuova speranza", "George Lucas");
$speranza->genere = "Fantascienza";
$speranza->anno = "1977";

var_dump($speranza);

$impero = new Movie("L'impero colpisce ancora", "Irvin Kershner");
$impero->genere = "Fantascienza";
$impero->anno = "1980";

var_dump($impero);

$ritorno = new Movie("Il ritorno dello Jedi", "Richard Marquand");
$ritorno->genere = "Fantascienza";
$ritorno->anno = "1983";

var_dump($ritorno);










?>