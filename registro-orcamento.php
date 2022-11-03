<?php

use Projeto\DesignPatterns\{Orcamento, RegistroOrcamento};
use Projeto\DesignPatterns\HTTP\ReactPHPHttpAdapter;

require_once 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());