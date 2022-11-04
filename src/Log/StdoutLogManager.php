<?php

namespace Projeto\DesignPatterns\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}