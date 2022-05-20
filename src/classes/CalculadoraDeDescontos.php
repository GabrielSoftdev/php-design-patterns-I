<?php

namespace Alura\Classes;

use Alura\Classes\Descontos\DescontoMaisDeCincoItens;
use Alura\Classes\Descontos\DescontoPorMaisQuinhentosGastos;
use Alura\Classes\Descontos\SemDeDesconto;
use Alura\Classes\Orcamento;

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
