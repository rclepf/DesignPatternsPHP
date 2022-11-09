<?php

require 'vendor/autoload.php';

use Projeto\DesignPatterns\PdoConnection;

$pdo = PdoConnection::getInstance('sqlite::memory:');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdo, $pdo2);
