<?php

namespace Omie\Base\Lancamentos;


/**
 * Inclusão em Lote de contas a pagar
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element conta_pagar_cadastroArray $conta_pagar_cadastro Cadastro de contas a pagar.
 * @pw_complex conta_pagar_lote
 */
class ContaPagarLote{
    /**
     * Número do lote processado
     *
     * @var integer
     */
    public $lote;
    /**
     * Cadastro de contas a pagar.
     *
     * @var conta_pagar_cadastroArray
     */
    public $conta_pagar_cadastro;
}