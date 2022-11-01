<?php

namespace Projeto\DesignPatterns;

class ListaOrcamentos
{
    private array $orcamentos;

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }
}