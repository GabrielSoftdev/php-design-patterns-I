<?php

namespace Alura\Classes\Impostos;

use Alura\Classes\Imposto;
use Alura\Classes\ImpostoCom2Aliquotas;
use Alura\Classes\Orcamento;

class ICPP extends ImpostoCom2Aliquotas
{
    public static function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }
    public static function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .03;
    }
    public static function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .02;
    }
}
