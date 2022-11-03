<?php

use Projeto\DesignPatterns\Orcamento;
use Projeto\DesignPatterns\Relatorios\OrcamentoZip;

require_once 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);