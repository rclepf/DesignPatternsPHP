<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\Descontos\DescontoMais500Reais;
use Projeto\DesignPatterns\Descontos\DescontoMais5Itens;
use Projeto\DesignPatterns\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMais5Itens(new DescontoMais500Reais(new SemDesconto));

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
