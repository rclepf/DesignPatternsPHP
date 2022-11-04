<?php

use Projeto\DesignPatterns\Log\{StdoutLogManager, FileLogManager};

require 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info','Testando Log Manager') . PHP_EOL;

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info','Testando Log Manager') . PHP_EOL;