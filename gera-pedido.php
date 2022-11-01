<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\{GerarPedido, GerarPedidoHandler};
use Projeto\DesignPatterns\AcoesGerarPedido\{CriarPedidoBanco, EnviarPedidoPorEmail, LogGerarPedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoBanco);
$gerarPedidoHandler->execute($gerarPedido);