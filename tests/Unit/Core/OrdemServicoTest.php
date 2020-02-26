<?php

use Omie\Core\OrdemServico;

final class OrdemServicoTest extends PHPUnit\Framework\TestCase
{
    private $app;
    
    public function setUp(): void
    {
        $this->app = new \Omie\Core\App(API_KEY, API_SECRET);
    }

    public function testGetJsonClient()
    {
        $ordemServico = new OrdemServico($this->app);
        $client = $ordemServico->getJsonClient();
        $this->assertInstanceOf('Omie\Base\OmieJsonClientInterface', $client);
    }
    
    public function testInstance()
    {
        $ordemServico = new OrdemServico($this->app);
        $this->assertInstanceOf('Omie\Core\OrdemServico', $ordemServico);
    }
    
}
