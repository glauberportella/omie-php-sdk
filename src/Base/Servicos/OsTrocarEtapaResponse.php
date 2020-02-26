<?php

namespace Omie\Base\Servicos;


/**
 * Resposta da solicitação de troca de etapa da Ordem de Serviço.
 *
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $codigo_status Código do Status
 * @pw_element string $descricao_status Descrição do Status
 * @pw_complex osTrocarEtapaResponse
 */
class OsTrocarEtapaResponse {
    /**
     * Código da Ordem de Serviço
     *
     * @var integer
     */
    public $nCodOS;
    /**
     * Código de Integração da OS
     *
     * @var string
     */
    public $cCodIntOS;
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
    public $codigo_status;
    /**
     * Descrição do Status
     *
     * @var string
     */
    public $descricao_status;
}