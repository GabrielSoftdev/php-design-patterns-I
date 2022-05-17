<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Classes\Descontos\DescontoMaisDeCincoItens;
use Alura\DesignPattern\Classes\Descontos\DescontoPorMaisQuinhentosGastos;
use Alura\DesignPattern\Classes\Descontos\SemDeDesconto;
use Alura\DesignPattern\Classes\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoPorMaisQuinhentosGastos(
                new SemDeDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
