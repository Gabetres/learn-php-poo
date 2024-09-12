<?php

require_once __DIR__ . "/src/Model/Filme.php";
require_once __DIR__ . "/src/Model/Serie.php";
require_once __DIR__ . "/src/Model/Genero.php";
require_once __DIR__ . "/src/Model/Titulo.php";

echo "Bem Vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarock',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "{$filme->nome}: tem a média {$filme->media()}\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";
