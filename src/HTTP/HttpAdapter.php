<?php

namespace Projeto\DesignPatterns\HTTP;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}