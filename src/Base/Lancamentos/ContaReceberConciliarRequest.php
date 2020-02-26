<?php

namespace Omie\Base\Lancamentos;


/**
 * Realiza a conciliação do documento
 *
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código do lançamento gerado pelo integrador.
 * @pw_complex conta_receber_conciliar_request
 */
class ContaReceberConciliarRequest{
    /**
     * Código da Baixa
     *
     * @var integer
     */
    public $codigo_baixa;
    /**
     * Código do lançamento gerado pelo integrador.
     *
     * @var string
     */
    public $codigo_baixa_integracao;
}