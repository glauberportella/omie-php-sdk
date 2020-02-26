<?php

namespace Omie\Base\ContaCorrente;


/**
 * Response do conta corrente
 *
 * @pw_element integer $lote Identificação do Lote
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex fin_conta_corrente_lote_response
 */
class FinContaCorrenteLoteResponse{
    /**
     * Identificação do Lote
     *
     * @var integer
     */
    public $lote;
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