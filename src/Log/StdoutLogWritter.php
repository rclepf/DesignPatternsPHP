<?php

namespace Projeto\DesignPatterns\Log;

class StdoutLogWritter implements LogWritter
{
    public function escreveLog(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}