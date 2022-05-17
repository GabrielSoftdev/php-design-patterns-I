<?php

namespace Alura\DesignPattern\Classes\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }
        return 0;
    }
}
