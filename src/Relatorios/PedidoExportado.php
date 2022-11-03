<?php

namespace Projeto\DesignPatterns\Relatorios;

use Projeto\DesignPatterns\Pedido;

class PedidoExportado implements ConteudoExportado
{
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}
