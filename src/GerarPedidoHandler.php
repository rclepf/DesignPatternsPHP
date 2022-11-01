<?php

namespace Projeto\DesignPatterns;

use Projeto\DesignPatterns\AcoesGerarPedido\AcaoAposGerarPedido;
use Projeto\DesignPatterns\AcoesGerarPedido\CriarPedidoBanco;
use Projeto\DesignPatterns\AcoesGerarPedido\EnviarPedidoPorEmail;
use Projeto\DesignPatterns\AcoesGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        /** @var AcaoAposGerarPedido[] */
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
