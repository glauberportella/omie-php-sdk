<?php

namespace Omie\Base\Lancamentos;


/**
 * Inclusão de Contas a Receber por Lote
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element conta_receber_cadastroArray $conta_receber_cadastro Cadastro de contas a receber.
 * @pw_complex conta_receber_lote
 */
class ContaReceberLote{
    /**
     * Número do lote processado
     *
     * @var integer
     */
    public $lote;
    /**
     * Cadastro de contas a receber.
     *
     * @var conta_receber_cadastroArray
     */
    public $conta_receber_cadastro;
}