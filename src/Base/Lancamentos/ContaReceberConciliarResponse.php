<?php

namespace Omie\Base\Lancamentos;


/**
 * Response da conciliação da Conta a Pagar
 *
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código de Integração da Baixa
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_receber_conciliar_response
 */
class ContaReceberConciliarResponse {
    /**
     * Código da Baixa
     *
     * @var integer
     */
    public $codigo_baixa;
    /**
     * Código de Integração da Baixa
     *
     * @var string
     */
    public $codigo_baixa_integracao;
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