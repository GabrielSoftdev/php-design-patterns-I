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

    abstract protected static function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract protected static function calculaTaxaMaxima(Orcamento $orcamento): float;
    abstract protected static function calculaTaxaMinima(Orcamento $orcamento): float;
}
