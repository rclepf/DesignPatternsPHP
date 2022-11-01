<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\Descontos\{DescontoMais500Reais, DescontoMais5Itens, SemDesconto};

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMais5Itens(new DescontoMais500Reais(new SemDesconto));

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
