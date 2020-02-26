<?php

namespace Omie\Base\Servicos;


/**
 * Retorno do cadastro da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex osStatus
 */
class OsStatus {
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
    /**
     * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
     *
     * @var string
     */
    public $cNumOS;
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