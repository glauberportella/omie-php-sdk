<?php

namespace Omie\Core;

use Omie\Base\Clientes\ClientesCadastroJsonClient;
use Omie\Base\Clientes\ClientesLoteRequest;
use Omie\Base\OmieMethodCallParamInterface;
use Omie\Base\OmieMethodCallRequestInterface;

class Cliente extends CrudRequest implements JsonClientRequest
{
    /**
     * @var OmieJsonClientInterface
     */
    protected static $jsonClient;
    
    public function get(OmieMethodCallRequestInterface $request)
    {
        return $this->getJsonClient()->ListarClientes($request);
    }

    public function insert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->IncluirCliente($params);
    }

    public function update(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->AlterarCliente($params);
    }
    
    public function upsert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->UpsertCliente($params);
    }
    
    public function upsertBatch(OmieMethodCallRequestInterface $request)
    {
        return $this->getJsonClient()->UpsertClientesPorLote($request);
    }

    public function delete(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->ExcluirCliente($params);
    }

    public function getJsonClient()
    {
        if (!self::$jsonClient) {
            self::$jsonClient = new ClientesCadastroJsonClient($this->app);
        }
        return self::$jsonClient;
    }
}