<?php

namespace Omie\Base\Lancamentos;


/**
 * Resposta do Lançamento de contas a pagar por lote
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_pagar_lote_response
 */
class ContaPagarLoteResponse {
    /**
     * Número do lote processado
     *
     * @var integer
     */
    public $lote;
    /**
     * Código do Status do processamento
     *
     * @var string
     */
    public $codigo_status;
    /**
     * Descrição do Status do Lote&nbsp;
     *
     * @var string
     */
    public $descricao_status;
}