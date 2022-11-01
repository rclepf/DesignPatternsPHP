<?php

namespace Projeto\DesignPatterns\Impostos;

use Projeto\DesignPatterns\Orcamento;

class PIS extends Imposto2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 600 && $orcamento->quantidadeItens > 5;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.015;
    }
}
