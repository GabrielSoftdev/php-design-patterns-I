<?php

namespace Alura\Classes;

use Alura\App\Enumenations\Imposto;
use Alura\Classes\Orcamento;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcularImposto($orcamento);
    }
}
