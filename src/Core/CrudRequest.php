<?php

namespace Omie\Core;

use Omie\Base\OmieJsonClientInterface;
use Omie\Base\OmieMethodCallParamInterface;
use Omie\Base\OmieMethodCallRequestInterface;

abstract class CrudRequest extends Request
{
    abstract public function insert(OmieMethodCallParamInterface $params);

    abstract public function update(OmieMethodCallParamInterface $params);

    abstract public function delete(OmieMethodCallParamInterface $params);

    abstract public function get(OmieMethodCallRequestInterface $params);
}