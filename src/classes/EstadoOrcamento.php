<?php

namespace Alura\Classes;

use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @param Orcamento $orcamento
     * @return float
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new DomainException('Este orcamento não pode ser aprovado.');
    }
    
    public function reprova(Orcamento $orcamento)
    {
        throw new DomainException('Este orcamento não pode ser reprovado.');
    }
    
    public function finaliza(Orcamento $orcamento)
    {
        throw new DomainException('Este orcamento não pode ser finalizado.');
    }
}
