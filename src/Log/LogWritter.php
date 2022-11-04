<?php

namespace Projeto\DesignPatterns\Log;

interface LogWritter
{
    public function escreveLog(string $mensagemFormatada): void;
}
