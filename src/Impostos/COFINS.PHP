<?php

namespace Projeto\DesignPatterns\Impostos;

use Projeto\DesignPatterns\Orcamento;

class COFINS extends Imposto2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 1000;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.08;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }
}