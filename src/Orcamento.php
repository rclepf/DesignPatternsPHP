<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\EstadosOrcamentos\EmAprovacao;
use Projeto\DesignPatterns\EstadosOrcamentos\EstadoOrcamento;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }
    
    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}
