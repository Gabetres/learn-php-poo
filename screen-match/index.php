<?php

require __DIR__ . "/src/Model/Filme.php";

echo "Bem Vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarock',
    2021,
    'super-heroi'
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "{$filme->nome}: tem a média {$filme->media()}\n";