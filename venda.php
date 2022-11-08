<?php

require 'vendor/autoload.php';

use Projeto\DesignPatterns\Vendas\VendaProdutoFactory;
use Projeto\DesignPatterns\Vendas\VendaServicoFactory;

/* $fabricaVenda = new VendaServicoFactory('Rodolfo Clepf'); */
$fabricaVenda = new VendaProdutoFactory(1500);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
