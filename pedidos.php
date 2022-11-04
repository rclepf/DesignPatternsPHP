<?php

use Projeto\DesignPatterns\Orcamento;
use Projeto\DesignPatterns\Pedido\CriadorPedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorPedido();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Rodolfo Clepf',
        date('Y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
