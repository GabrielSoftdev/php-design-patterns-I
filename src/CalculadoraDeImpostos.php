<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Classes\Orcamento;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $orcamento->valor * $imposto->porcentual();
    }
}
