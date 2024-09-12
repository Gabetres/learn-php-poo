<?php

require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Genero.php";

echo "Bem Vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarock',
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "{$filme->nome}: tem a média {$filme->media()}\n";