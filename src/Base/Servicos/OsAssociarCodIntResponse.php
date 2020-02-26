<?php

namespace Omie\Base\Servicos;


/**
 * Resposta da solicitação de alteração do código de integração da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex osAssociarCodIntResponse
 */
class OsAssociarCodIntResponse{
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
    /**
     * Código do Status
     *
     * @var string
     */
    public $cCodStatus;
    /**
     * Descrição do Status
     *
     * @var string
     */
    public $cDescStatus;
}