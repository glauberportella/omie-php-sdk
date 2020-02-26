<?php

namespace Omie\Base\Lancamentos;


/**
 * Chave da conta a a receber
 *
 * @pw_element integer $chave_lancamento Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_complex conta_receber_cadastro_chave
 */
class ContaReceberCadastroChave {
    /**
     * Chave do Lançamento
     *
     * @var integer
     */
    public $chave_lancamento;
    /**
     * Código do lançamento gerado pelo integrador.
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
}