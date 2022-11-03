<?php

use Projeto\DesignPatterns\CacheOrcamentoProxy;
use Projeto\DesignPatterns\ItemOrcamento;
use Projeto\DesignPatterns\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1-> valor = 300;
$item2 = new ItemOrcamento();
$item2-> valor = 500;
$item3 = new ItemOrcamento();
$item3-> valor = 750;

$orcamento->addItem($item1);
$orcamento->addItem($item2);
$orcamento->addItem($item3);

$orcamentoAntigo = new Orcamento();
$item4 =  new ItemOrcamento();
$item4->valor = 150;
$orcamentoAntigo->addItem($item4);

$orcamento->addItem($orcamentoAntigo);

$orcamentoMuitoAntigo = new Orcamento();
$item5 = new ItemOrcamento();
$item5->valor = 500;

$item6 = new ItemOrcamento();
$item6->valor = 300;

$orcamentoMuitoAntigo->addItem($item5);
$orcamentoMuitoAntigo->addItem($item6);

$orcamentoAntigo->addItem($orcamentoMuitoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;