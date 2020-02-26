<?php

namespace Omie\Base\Lancamentos;


/**
 * Cancela um pagamento realizado para um título do Contas a Pagar.
 *
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_complex conta_pagar_cancelar_pagamento
 */
class ContaPagarCancelarPagamento{
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
}