<?php

namespace Omie\Core;


use Omie\Base\OmieJsonClientInterface;
use Omie\Base\OmieMethodCallParamInterface;
use Omie\Base\OmieMethodCallRequestInterface;
use Omie\Base\Servicos\OrdemServicoJsonClient;

class OrdemServico extends CrudRequest implements JsonClientRequest
{
    const ETAPA_CADASTRO = 10;
    const ETAPA_EM_EXECUCAO = 20;
    const ETAPA_EXECUTADA = 30;
    const ETAPA_FATURAR = 40;
    const ETAPA_FATURADO = 50;
    
    /**
     * @var OmieJsonClientInterface
     */
    protected static $jsonClient;

    /**
     * @return OmieJsonClientInterface|OrdemServicoJsonClient
     */
    public function getJsonClient()
    {
        if (!self::$jsonClient) {
            self::$jsonClient = new OrdemServicoJsonClient($this->app);
        }
        return self::$jsonClient;
    }

    public function insert(OmieMethodCallParamInterface $params)
    {
        return $this->getJsonClient()->IncluirOS($params);
    }

    public function update(OmieMethodCallParamInterface $params)
    {
        // TODO: Implement update() method.
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