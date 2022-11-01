<?php

use Projeto\DesignPatterns\ListaOrcamentos;
use Projeto\DesignPatterns\Orcamento;

require_once 'vendor/autoload.php';

$listaOrcamentos = [];

$orcamento1 = new Orcamento;
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1250;

$orcamento2 = new Orcamento;
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 2500;

$orcamento3 = new Orcamento;
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350;

$orcamento4 = new Orcamento;
$orcamento4->quantidadeItens = 5;
$orcamento4->aprova();
$orcamento4->valor = 1000;

$orcamento5 = new Orcamento;
$orcamento5->quantidadeItens = 10;
$orcamento5->reprova();
$orcamento5->finaliza();
$orcamento5->valor = 1000;

$listaOrcamentos = new ListaOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);
$listaOrcamentos->addOrcamento($orcamento4);
$listaOrcamentos->addOrcamento($orcamento5);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd Itens: " . $orcamento->quantidadeItens . PHP_EOL;

    echo PHP_EOL;
}
