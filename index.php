<?php

class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno;
}


$speranza = new Movie();
$speranza->titolo = "Una nuova speranza";
$speranza->regista = "George Lucas";
$speranza->genere = "Fantascienza";
$speranza->anno = "1977";

var_dump($speranza);

$impero = new Movie();
$impero->titolo = "L'impero colpisce ancora";
$impero->regista = "Irvin Kershner";
$impero->genere = "Fantascienza";
$impero->anno = "1980";

var_dump($impero);

$ritorno = new Movie();
$ritorno->titolo = "Il ritorno dello Jedi";
$ritorno->regista = "Richard Marquand";
$ritorno->genere = "Fantascienza";
$ritorno->anno = "1983";

var_dump($ritorno);










?>