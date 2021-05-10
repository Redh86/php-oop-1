<?php

class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno;
}

$starWars = new Movie();
$starWars->titolo = "L'impero colpisce ancora";
$starWars->regista = "Irvin Kershner";
$starWars->genere = "Fantascienza";
$starWars->anno = "1980";

var_dump($starWars);










?>