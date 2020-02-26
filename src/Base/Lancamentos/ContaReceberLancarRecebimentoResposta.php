<?php

namespace Omie\Base\Lancamentos;


/**
 * Resultado da baixa realizada para um lançamento do conta a receber.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a pagar.
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element integer $codigo_baixa Código da baixa do contas a receber no Omie.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa do título do contas a receber.
 * @pw_element string $liquidado Indica que o recebimento liquidado.
 * @pw_element decimal $valor_baixado Valor baixado
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_receber_lancar_recebimento_resposta
 */
class ContaReceberLancarRecebimentoResposta{
    /**
     * Código do lançamento no contas a pagar.
     *
     * @var integer
     */
    public $codigo_lancamento;
    /**
     * Código do lançamento gerado pelo integrador.
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
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
     * Indica que o recebimento liquidado.
     *
     * @var string
     */
    public $liquidado;
    /**
     * Valor baixado
     *
     * @var decimal
     */
    public $valor_baixado;
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