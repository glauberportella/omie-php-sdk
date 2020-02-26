<?php

use Omie\Core\ContaPagar;

final class ContaPagarTest extends PHPUnit\Framework\TestCase
{
    private $app;
    
    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }

    public function testGetJsonClient()
    {
        $contaPagar = new ContaPagar($this->app);
        $client = $contaPagar->getJsonClient();
        $this->assertInstanceOf('Omie\Base\OmieJsonClientInterface', $client);
    }
    
    public function testInstance()
    {
        $contaPagar = new ContaPagar($this->app);
        $this->assertInstanceOf('Omie\Core\ContaPagar', $contaPagar);
    }
    
}
