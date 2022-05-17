<?php

namespace Alura\App;

use Alura\App\Impostos\Imposto;
use Alura\Classes\Orcamento;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $orcamento->valor * $imposto->porcentual();
    }
}
