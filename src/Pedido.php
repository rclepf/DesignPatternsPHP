<?php

namespace Projeto\DesignPatterns;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}