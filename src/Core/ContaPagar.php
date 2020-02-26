<?php

namespace Omie\Core;


use Omie\Base\Lancamentos\LancamentoContaPagarJsonClient;
use Omie\Base\OmieJsonClientInterface;
use Omie\Base\OmieMethodCallParamInterface;
use Omie\Base\OmieMethodCallRequestInterface;

class ContaPagar extends CrudRequest implements JsonClientRequest
{
    /**
     * @var OmieJsonClientInterface
     */
    protected static $jsonClient;

    /**
     * @return OmieJsonClientInterface|LancamentoContaPagarJsonClient
     */
    public function getJsonClient()
    {
        if (!self::$jsonClient) {
            self::$jsonClient = new LancamentoContaPagarJsonClient($this->app);
        }
        return self::$jsonClient;
    }

    public function insert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->IncluirContaPagar($params);
    }

    public function update(OmieMethodCallParamInterface $params)
    {
        // TODO: Implement update() method.
    }

    public function upsert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->UpsertContaPagar($params);
    }

    public function delete(OmieMethodCallParamInterface $params)
    {
        // TODO: Implement delete() method.
    }

    public function get(OmieMethodCallRequestInterface $params)
    {
        // TODO: Implement get() method.
    }
}