<?php

namespace Omie\Base\Lancamentos;


/**
 * Informações para realizada a Baixa do Contas a Receber.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a pagar.
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element integer $codigo_baixa Código da baixa do contas a receber no Omie.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa do título do contas a receber.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element string $codigo_conta_corrente_integracao Código da Conta Corrente do Integrador.
 * @pw_element decimal $valor Valor baixado
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_element string $bloqueado Bloquear lançamento (S/N)
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente.
 * @pw_element string $nsu Número Sequencial Único - Comprovante de pagamento.
 * @pw_complex conta_receber_lancar_recebimento
 */
class ContaReceberLancarRecebimento {
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
     * Código da Conta Corrente.
     *
     * @var integer
     */
    public $codigo_conta_corrente;
    /**
     * Código da Conta Corrente do Integrador.
     *
     * @var string
     */
    public $codigo_conta_corrente_integracao;
    /**
     * Valor baixado
     *
     * @var decimal
     */
    public $valor;
    /**
     * Valor do desconto.
     *
     * @var decimal
     */
    public $desconto;
    /**
     * Valor do Juros.
     *
     * @var decimal
     */
    public $juros;
    /**
     * Valor da multa.
     *
     * @var decimal
     */
    public $multa;
    /**
     * Data da Baixa
     *
     * @var string
     */
    public $data;
    /**
     * Observação da Baixa do Contas a Receber.
     *
     * @var string
     */
    public $observacao;
    /**
     * Bloquear lançamento (S/N)
     *
     * @var string
     */
    public $bloqueado;
    /**
     * Efetua a conciliação do documento automaticamente.
     *
     * @var string
     */
    public $conciliar_documento;
    /**
     * Número Sequencial Único - Comprovante de pagamento.
     *
     * @var string
     */
    public $nsu;
}