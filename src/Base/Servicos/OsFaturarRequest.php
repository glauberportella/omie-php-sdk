<?php

namespace Omie\Base\Servicos;


/**
 * Solicitação de validação da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_complex osFaturarRequest
 */
class OsFaturarRequest{
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