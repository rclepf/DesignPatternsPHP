<?php

require 'vendor/autoload.php';

use Projeto\DesignPatterns\ItemOrcamento;
use Projeto\DesignPatterns\NotaFiscal\ContrutorNotaFiscal;

$builder = new ContrutorNotaFiscal();

$notafiscal = $builder->paraEmpresa('3122233000', 'Empresa SA')
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comObservacoes('Essa NF foi criada com Construtor')
    ->constroi();
