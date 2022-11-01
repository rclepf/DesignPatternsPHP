<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};
use Projeto\DesignPatterns\AcoesGerarPedido\CriarPedidoBanco;
use Projeto\DesignPatterns\AcoesGerarPedido\EnviarPedidoPorEmail;
use Projeto\DesignPatterns\AcoesGerarPedido\LogGerarPedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoBanco);
$gerarPedidoHandler->execute($gerarPedido);