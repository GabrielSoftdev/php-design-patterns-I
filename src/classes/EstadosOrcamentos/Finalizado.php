<?php

namespace Alura\Classes\EstadosOrcamentos;

use Alura\Classes\EstadoOrcamento;
use Alura\Classes\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Orçamentos reprovados e finalizados não podem receber descontos');
    }
}
