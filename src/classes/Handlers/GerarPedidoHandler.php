<?php

namespace Alura\Classes\Handlers;

use Alura\Classes\GerarPedido;

/**
 * representação do padrão Command, o gerenciamento de comandos 
 * através de outras classes, como um controller.
 */

class GerarPedidoHandler
{
    public function __construct()
    {
        // demais serviços a serem executados ao gerar o pedido
    }

    public function execute(GerarPedido $gerarPedido)
    {
        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-mail para o cliente " . PHP_EOL;
        echo $gerarPedido->pedido . PHP_EOL;
        echo "Aguardando Pagamento ..." . PHP_EOL;
    }
}
