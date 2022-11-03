<?php

namespace Projeto\DesignPatterns;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        //biblioteca de log
        echo "Salvando log de desconto: $descontoCalculado";
    }
}