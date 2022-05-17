<?php

namespace Alura\Classes\Descontos;

use Alura\Classes\Orcamento;

class DescontoPorMaisQuinhentosGastos extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
