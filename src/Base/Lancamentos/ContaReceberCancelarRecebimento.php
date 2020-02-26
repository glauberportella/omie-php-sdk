<?php

namespace Omie\Base\Lancamentos;


/**
 * Requisição de cancelamento de lançamento de baixa do recebimento.
 *
 * @pw_element integer $codigo_baixa Código da baixa do contas a receber no Omie.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa do título do contas a receber.
 * @pw_complex conta_receber_cancelar_recebimento
 */
class ContaReceberCancelarRecebimento {
    /**
     * Código da baixa do contas a receber no Omie.
     *
     * @var integer
     */
    public $codigo_baixa;
    /**
     * Código da baixa do integrador para identificar a baixa do título do contas a receber.
     *
     * @var string
     */
    public $codigo_baixa_integracao;
}