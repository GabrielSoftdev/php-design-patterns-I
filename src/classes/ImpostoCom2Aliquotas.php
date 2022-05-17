<?php

namespace Alura\Classes;

abstract class ImpostoCom2Aliquotas implements Imposto
{
    public static function calcular(Orcamento $orcamento): float
    {
        if (self::deveAplicarTaxaMaxima($orcamento))
            return self::calculaTaxaMaxima($orcamento);

        return self::calculaTaxaMinima($orcamento);
    }

    abstract static function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract static function calculaTaxaMaxima(Orcamento $orcamento): float;
    abstract static function calculaTaxaMinima(Orcamento $orcamento): float;
}
