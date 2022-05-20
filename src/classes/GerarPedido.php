<?php

namespace Alura\Classes;

use Command;

class GerarPedido
{
    public Pedido $pedido;

    public function __construct(Cliente $cliente, Orcamento $orcamento)
    {
        $this->pedido = new Pedido($cliente, $orcamento);
    }

}
