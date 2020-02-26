<?php

use Omie\Core\App;
use Omie\Core\Cliente;

final class ClienteTest extends PHPUnit\Framework\TestCase
{
    public function testCanInstantiateOmieCoreCustomerRequest()
    {
        $app = new App(API_KEY, API_SECRET, 'Nome App');
        $this->assertInstanceOf(
            Cliente::class,
            new Cliente($app)
        );
    }
}