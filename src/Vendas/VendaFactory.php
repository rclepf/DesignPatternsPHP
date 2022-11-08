<?php

namespace Projeto\DesignPatterns\Vendas;

use Projeto\DesignPatterns\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
