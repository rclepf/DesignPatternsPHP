<?php

namespace Projeto\DesignPatterns\Descontos;

use Projeto\DesignPatterns\Orcamento;

class DescontoMais5Itens
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }
        return 0;
    }
}
