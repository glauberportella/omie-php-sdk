<?php

namespace Omie\Base\Servicos;


/**
 * Solicitação de Status da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_complex osStatusRequest
 */
class OsStatusRequest{
    /**
     * Código de Integração da OS
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