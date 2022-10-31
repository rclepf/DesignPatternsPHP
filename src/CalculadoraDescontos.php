<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\Descontos\DescontoMais500Reais;
use Projeto\DesignPatterns\Descontos\DescontoMais5Itens;

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $desconto5Itens = new DescontoMais5Itens();
        $desconto = $desconto5Itens->calculaDesconto($orcamento);
        if ($desconto === 0) {
            $desconto500Reais = new DescontoMais500Reais();
            $desconto = $desconto500Reais->calculaDesconto($orcamento);
        }

        return $desconto;
    }
}
