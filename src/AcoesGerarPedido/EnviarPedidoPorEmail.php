<?php

namespace Projeto\DesignPatterns\AcoesGerarPedido;

use Projeto\DesignPatterns\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado." . PHP_EOL;
    }
}
