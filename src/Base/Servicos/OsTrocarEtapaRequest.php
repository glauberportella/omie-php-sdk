<?php

namespace Omie\Base\Servicos;


/**
 * Solicitação de troca de etapa da Ordem de Serviço.
 *
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_complex osTrocarEtapaRequest
 */
class OsTrocarEtapaRequest {
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
     * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
     *
     * @var string
     */
    public $cEtapa;
}