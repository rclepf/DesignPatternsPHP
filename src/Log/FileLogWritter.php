<?php

namespace Projeto\DesignPatterns\Log;

class FileLogWritter implements LogWritter
{
    private $arquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function escreveLog(string $mensagemFormatada): void
    {
        fwrite($this->arquivo, $mensagemFormatada . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
