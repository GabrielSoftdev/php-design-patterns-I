<?php

namespace Alura\Classes\Descontos;

use Alura\Classes\Orcamento;

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
