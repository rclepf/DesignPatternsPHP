<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\{CalculadoraDescontos, CalculadoraImpostos, Orcamento};
use Projeto\DesignPatterns\Impostos\COFINS;
use Projeto\DesignPatterns\Impostos\ICMS;
use Projeto\DesignPatterns\Impostos\IPI;
use Projeto\DesignPatterns\Impostos\PIS;

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new IPI(new COFINS(new ICMS(new PIS()))));

/* $calculadora = new CalculadoraDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 5000;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento); */