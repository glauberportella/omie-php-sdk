<?php

namespace Omie\Core;

final class App 
{
    /**
     * App key
     *
     * @var string
     */
    private $key;

    /**
     * App secret
     *
     * @var string
     */
    private $secret;

    /**
     * App name
     *
     * @var string
     */
    private $name;

    public function __construct($key, $secret, $name = null)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->name = $name;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the value of secret
     */ 
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set the value of secret
     *
     * @return  self
     */ 
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }
}