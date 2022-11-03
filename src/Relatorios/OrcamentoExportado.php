<?php

namespace Projeto\DesignPatterns\Relatorios;

use Projeto\DesignPatterns\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return[
            'valor' => $this->orcamento->valor,
            'quantidadeItens' => $this->orcamento->quantidadeItens
        ];
    }
}

