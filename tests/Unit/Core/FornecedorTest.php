<?php

use Omie\Core\App;
use Omie\Core\Fornecedor;

final class FornecedorTest extends PHPUnit\Framework\TestCase
{
    public function testCanInstantiateOmieCoreSupplierRequest()
    {
        $app = new App(API_KEY, API_SECRET, 'Nome do App');
        $this->assertInstanceOf(
            Fornecedor::class,
            new Fornecedor($app)
        );
    }
}