<?php

namespace Projeto\DesignPatterns\Vendas;

use Projeto\DesignPatterns\Impostos\Imposto;
use Projeto\DesignPatterns\Impostos\ISS;

class VendaServicoFactory implements VendaFactory
{
    public string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new ISS();
    }
}