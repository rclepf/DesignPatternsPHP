<?php

namespace Projeto\DesignPatterns\HTTP;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        //instance ReactPHP
        //prepare data
        //make requisition
        echo "ReactPHP";
    }
}