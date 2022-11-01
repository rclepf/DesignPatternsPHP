<?php

namespace Projeto\DesignPatterns\EstadosOrcamentos;

use Projeto\DesignPatterns\Orcamento;

class Aprovado
{
    public function calculaDescontoExtra(Orcamento $orcamento):float
    {
        return $orcamento->valor * 0.02;
    }
    
    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}