<?php

namespace Projeto\DesignPatterns\Relatorios;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
