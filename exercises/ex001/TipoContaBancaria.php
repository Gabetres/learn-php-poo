<?php

enum TipoContaBancaria
{
    case ContaCorrente;
    case ContaInvestimento;
    case ContaPoupanca;
    case ContaUniversitaria;
    
    public function PossuiTaxa(): bool
    {
        return match ($this) {
            TipoContaBancaria::ContaCorrente, TipoContaBancaria::ContaInvestimento, => true,
            TipoContaBancaria::ContaPoupanca, TipoContaBancaria::ContaUniversitaria, => false,
        };
    }
}
