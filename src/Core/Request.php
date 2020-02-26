<?php

namespace Omie\Core;

use Omie\Base\OmieMethodCallParamInterface;

abstract class Request
{
    /**
     * Omie App
     *
     * @var Omie\Core\App
     */
    protected $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * Get omie App
     *
     * @return  Omie\Core\App
     */ 
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set omie App
     *
     * @param  Omie\Core\App  $app  Omie App
     *
     * @return  self
     */ 
    public function setApp(App $app)
    {
        $this->app = $app;

        return $this;
    }
}