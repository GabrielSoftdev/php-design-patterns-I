<?php

namespace Alura\Classes\Impostos;

use Alura\Classes\Imposto;
use Alura\Classes\Orcamento;

class ISS extends Imposto
{
    public static function calcular(Orcamento $orcamento): float
    {
        return $orcamento->valor * .1;
    }
}
