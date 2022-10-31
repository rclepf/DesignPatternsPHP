<?php

namespace Projeto\DesignPatterns\Descontos;

use Projeto\DesignPatterns\Orcamento;

class DescontoMais5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
