<?php

namespace Projeto\DesignPatterns\AcoesGerarPedido;

use Projeto\DesignPatterns\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}