<?php

namespace Projeto\DesignPatterns\Impostos;

use Projeto\DesignPatterns\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
