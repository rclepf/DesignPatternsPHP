<?php

namespace Projeto\DesignPatterns\Impostos;

use Projeto\DesignPatterns\Orcamento;

class COFINS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 600 && $orcamento->quantidadeItens > 3) {
            return $orcamento->valor * 0.07;
        }

        return $orcamento->valor * 0.1;
    }
}
