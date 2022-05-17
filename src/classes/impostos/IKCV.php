<?php

namespace Alura\Classes\Impostos;

use Alura\Classes\ImpostoCom2Aliquotas;
use Alura\Classes\Orcamento;

class IKCV  extends ImpostoCom2Aliquotas
{
    public static function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 &&  $orcamento->quantidadeItens > 3;
    }
    public static function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .04;
    }
    public static function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .025;
    }
}
