<?php

namespace Omie\Base\Lancamentos;


/**
 * Resposta do cancelamento da baixa.
 *
 * @pw_element integer $codigo_baixa Código da baixa do contas a receber no Omie.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa do título do contas a receber.
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_receber_cancelar_recebimento_resposta
 */
class ContaReceberCancelarRecebimentoResposta {
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