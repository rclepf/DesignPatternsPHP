<?php

namespace Projeto\DesignPatterns\Log;

class FileLogManager extends LogManager
{
    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }
    
    public function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}