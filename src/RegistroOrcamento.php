<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\EstadosOrcamentos\Finalizado;
use Projeto\DesignPatterns\HTTP\HttpAdapter;

class RegistroOrcamento
{
    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados.');
        }
        
        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens
        ]);
    }
}
