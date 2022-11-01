<?php

namespace Projeto\DesignPatterns;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public string $estadoAtual;
}

public function aplicaDescontoExtra()
{
    $this->valor -= $this->calculaDescontoExtra();
}

public function calculaDescontoExtra()
{
    if ($this->estadoAtual == 'EM_APROVACAO') {
        return $this->valor * 0.05;
    }

    if ($this->estadoAtual == 'APROVADO') {
        return $this->valor * 0.02;
    }

    throw new \DomainException(
        'Orcamentos reprovados e finalizados não podem receber desconto');
    }
