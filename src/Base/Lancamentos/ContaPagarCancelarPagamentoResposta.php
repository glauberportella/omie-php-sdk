<?php

namespace Omie\Base\Lancamentos;


/**
 * Resposta do Cancelamento de um pagamento realizado para um título do Contas a Pagar.
 *
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_pagar_cancelar_pagamento_resposta
 */
class ContaPagarCancelarPagamentoResposta {
    /**
     * Código para identificar a baixa do título no Contas a Pagar.
     *
     * @var integer
     */
    public $codigo_baixa;
    /**
     * Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
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