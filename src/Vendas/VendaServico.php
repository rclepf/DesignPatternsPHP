<?php

namespace Projeto\DesignPatterns\Vendas;

class VendaServico extends Venda
{
    public string $nomePrestador;
    
    public function __construct(\DateTimeImmutable $dataRealizacao, string $nomePrestador)
    {
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}