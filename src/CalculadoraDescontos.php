<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\Descontos\{DescontoMais500Reais, DescontoMais5Itens, SemDesconto};

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMais5Itens(new DescontoMais500Reais(new SemDesconto));

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
