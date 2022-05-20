<?php

namespace Alura\Classes;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;

class Pedido
{
    private Cliente $cliente;
    private DateTimeInterface $dataFinalizacao;
    private Orcamento $orcamento;

    public function __construct(Cliente $cliente, Orcamento $orcamento)
    {
        $this->dataFinalizacao = new DateTimeImmutable();
        $this->cliente = $cliente;
        $this->orcamento = $orcamento;
    }
    private function getDataFinalizacao()
    {
        return $this->dataFinalizacao->format('d/m/Y H:i:s');
    }


    public function __toString()
    {
        return "Pedido para o cliente {$this->cliente->getNome()} com " .
            "{$this->orcamento->quantidadeItens} itens e valor de {$this->orcamento->valor}" .
            " finalizado às {$this->getDataFinalizacao()}";
    }
}
