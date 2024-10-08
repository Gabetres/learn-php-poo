<?php

require_once __DIR__ . '/Titulo.php';
require_once __DIR__ . '/Genero.php';

class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }
}
