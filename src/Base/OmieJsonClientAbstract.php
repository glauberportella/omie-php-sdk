<?php

namespace Omie\Base;


use Omie\Core\App;

class OmieJsonClientAbstract implements OmieJsonClientInterface
{
    /**
     * @var \Omie\Core\App
     */
    protected static $_App;

    public function __construct(App $app)
    {
        self::$_App = $app;
    }
}