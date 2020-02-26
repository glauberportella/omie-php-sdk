<?php

namespace Omie\Core;


interface JsonClientRequest
{
    /**
     * @return OmieJsonClientInterface
     */
    public function getJsonClient();
}