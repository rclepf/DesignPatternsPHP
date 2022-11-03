<?php

require_once 'vendor/autoload.php';

use Projeto\DesignPatterns\{Orcamento, Pedido};
use Projeto\DesignPatterns\Relatorios\{OrcamentoExportado, PedidoExportado};
use Projeto\DesignPatterns\Relatorios\{ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);

