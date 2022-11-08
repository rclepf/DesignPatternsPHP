<?php

namespace Projeto\DesignPatterns\Vendas;

use Projeto\DesignPatterns\Impostos\ICMS;
use Projeto\DesignPatterns\Impostos\Imposto;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }
    
    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new ICMS();
    }
}