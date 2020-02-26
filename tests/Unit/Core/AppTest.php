<?php

use Omie\Core\App;

final class AppTest extends PHPUnit\Framework\TestCase
{
    public function testCanInstantiateOmieCoreApp()
    {
        $this->assertInstanceOf(
            App::class,
            new App(API_KEY, API_SECRET, 'iFriend')
        );
    }
}