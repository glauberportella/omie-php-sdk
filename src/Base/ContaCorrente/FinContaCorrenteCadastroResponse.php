<?php

namespace Omie\Base\ContaCorrente;


/**
 * Response do cadastro do conta corrente.
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex fin_conta_corrente_cadastro_response
 */
class FinContaCorrenteCadastroResponse{
    /**
     * Código da conta corrente no Omie.
     *
     * @var integer
     */
    public $nCodCC;
    /**
     * Código de Integração do Parceiro.
     *
     * @var string
     */
    public $cCodCCInt;
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
    public $cDesStatus;
}