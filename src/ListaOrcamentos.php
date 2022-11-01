<?php

namespace Projeto\DesignPatterns;

use Traversable;

class ListaOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }
    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->orcamentos);
    }
}
