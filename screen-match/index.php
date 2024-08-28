<?php

require __DIR__ . "/src/Model/Filme.php";

echo "Bem Vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme->nome = "Thor - Ragnarok";
$filme->anoDeLançamento = 2021;
$filme->genero = "super-heroi";

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo $filme->media();
