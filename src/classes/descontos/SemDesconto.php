<?php

namespace Alura\DesignPattern\Classes\Descontos;

use Alura\DesignPattern\Classes\Orcamento;

class SemDeDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
