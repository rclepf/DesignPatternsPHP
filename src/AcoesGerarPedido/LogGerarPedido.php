<?php

namespace Projeto\DesignPatterns\AcoesGerarPedido;

use Projeto\DesignPatterns\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de pedido." . PHP_EOL;
    }
}
