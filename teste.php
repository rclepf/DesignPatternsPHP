<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\{CalculadoraDescontos, Orcamento};

/* $calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new IPI()); */

$calculadora = new CalculadoraDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 5000;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento);