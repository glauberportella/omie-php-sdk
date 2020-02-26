<?php

namespace Omie\Core;


use Omie\Base\Lancamentos\LancamentoContaPagarJsonClient;
use Omie\Base\Lancamentos\LancamentoContaReceberJsonClient;
use Omie\Base\OmieJsonClientInterface;
use Omie\Base\OmieMethodCallParamInterface;
use Omie\Base\OmieMethodCallRequestInterface;

class ContaReceber extends CrudRequest implements JsonClientRequest
{
    /**
     * @var OmieJsonClientInterface
     */
    protected static $jsonClient;

    /**
     * @return OmieJsonClientInterface|LancamentoContaReceberJsonClient
     */
    public function getJsonClient()
    {
        if (!self::$jsonClient) {
            self::$jsonClient = new LancamentoContaReceberJsonClient($this->app);
        }
        return self::$jsonClient;
    }

    public function insert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->IncluirContaReceber($params);
    }

    public function update(OmieMethodCallParamInterface $params)
    {
        // TODO: Implement update() method.
    }

    public function upsert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->UpsertContaReceber($params);
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