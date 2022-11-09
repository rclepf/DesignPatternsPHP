<?php

require 'vendor/autoload.php';

use Projeto\DesignPatterns\ItemOrcamento;
use Projeto\DesignPatterns\NotaFiscal\ConstrutorNotaFiscalProduto;
use Projeto\DesignPatterns\NotaFiscal\ContrutorNotaFiscal;

$builder = new ConstrutorNotaFiscalProduto();

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 500;

$notafiscal = $builder->paraEmpresa('555555', 'Rodolfo')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Essa NF foi criada com Construtor')
    ->constroi();

echo $notafiscal->valor() . PHP_EOL;
echo $notafiscal->valorImpostos . PHP_EOL;
