<?php

namespace Alura\Classes\Impostos;

use Alura\Classes\Imposto;
use Alura\Classes\Orcamento;

class ICMS  extends Imposto
{
    public static function calcular(Orcamento $orcamento): float
    {
        return $orcamento->valor * .06;
    }
}
