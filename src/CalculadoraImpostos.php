<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\Impostos\Imposto;

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
