<?php

require_once 'vendor/autoload.php';

use Alura\Classes\{Orcamento, Cliente, GerarPedido};
use Alura\Classes\Handlers\GerarPedidoHandler;


// representação a entrada de dados de vinda do cliente ..  
$valorDoOrcamento = $argv[1];
$quantidadeDeItens = $argv[2];
$nomeDoCliente = $argv[3];
$cpfDoCliente = $argv[4];

$cliente = new Cliente($nomeDoCliente, $cpfDoCliente);
$orcamento = new Orcamento($valorDoOrcamento, $quantidadeDeItens);

// padrão command
$gerarPedido = new GerarPedido($cliente, $orcamento);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);
