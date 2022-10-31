<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\CalculadoraImpostos;
use Projeto\DesignPatterns\Impostos\ICMS;
use Projeto\DesignPatterns\Impostos\IPI;
use Projeto\DesignPatterns\Orcamento;

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new IPI());