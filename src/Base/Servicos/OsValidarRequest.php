<?php

namespace Omie\Base\Servicos;


use Omie\Base\OmieMethodCallRequestInterface;

/**
 * Solicitação de validação da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_complex osValidarRequest
 */
class OsValidarRequest implements OmieMethodCallRequestInterface {
    /**
     * Código de Integração da Ordem de Serviço
     *
     * @var string
     */
    public $cCodIntOS;
    /**
     * Código da Ordem de Serviço
     *
     * @var integer
     */
    public $nCodOS;
}