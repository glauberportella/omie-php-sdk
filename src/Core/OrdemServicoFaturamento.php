<?php

namespace Omie\Core;


use Omie\Base\OmieJsonClientInterface;
use Omie\Base\Servicos\OrdemServicoFaturamentoJsonClient;
use Omie\Base\Servicos\OsCancelarRequest;
use Omie\Base\Servicos\OsDuplicarRequest;
use Omie\Base\Servicos\OsFaturarRequest;
use Omie\Base\Servicos\OsValidarRequest;
use Omie\Base\Servicos\OsValidarResponse;

class OrdemServicoFaturamento extends Request implements JsonClientRequest
{
   
    /**
     * @var OmieJsonClientInterface
     */
    protected static $jsonClient;

    /**
     * @return OmieJsonClientInterface|OrdemServicoFaturamentoJsonClient
     */
    public function getJsonClient()
    {
        if (!self::$jsonClient) {
            self::$jsonClient = new OrdemServicoFaturamentoJsonClient($this->app);
        }
        return self::$jsonClient;
    }
    
    public function validar(OsValidarRequest $request)
    {
        return $this->getJsonClient()->ValidarOS($request);
    }
    
    public function cancelar(OsCancelarRequest $request)
    {
        return $this->getJsonClient()->CancelarOS($request);
    }
    
    public function faturar(OsFaturarRequest $request)
    {
        return $this->getJsonClient()->FaturarOS($request);
    }
    
    public function duplicar(OsDuplicarRequest $request)
    {
        return $this->getJsonClient()->DuplicarOS($request);
    }

}