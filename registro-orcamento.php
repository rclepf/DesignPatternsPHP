<?php

use Projeto\DesignPatterns\HTTP\CurlHttpAdapter;
use Projeto\DesignPatterns\{Orcamento, RegistroOrcamento};

require_once 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());