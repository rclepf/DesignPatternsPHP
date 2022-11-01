<?php

namespace Projeto\DesignPatterns\AcoesGerarPedido;

use Projeto\DesignPatterns\Pedido;

class CriarPedidoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados." . PHP_EOL;
    }
}
