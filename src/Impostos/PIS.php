<?php

namespace Projeto\DesignPatterns\Impostos;

use Projeto\DesignPatterns\Orcamento;

class PIS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.03;
        }

        return $orcamento->valor * 0.015;
    }
}
