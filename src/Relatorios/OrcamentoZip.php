<?php

namespace Projeto\DesignPatterns\Relatorios;

use Projeto\DesignPatterns\Orcamento;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento): void
    {
        $caminhoArquivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'orcamento.zip';
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo, \ZipArchive::CREATE);
        $zip->addFromString('orcamento.calopsita', serialize($orcamento));
        $zip->close();
    }
}
