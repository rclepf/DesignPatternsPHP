<?php

namespace Projeto\DesignPatterns;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache = 0;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException('Não é possível adicionar item em Orcamentos em cache.');
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }
        return $this->valorCache;
    }
}
