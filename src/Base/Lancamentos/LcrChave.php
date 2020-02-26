<?php

namespace Omie\Base\Lancamentos;


/**
 * Chave de pesquisa do Lançamento de Contas a Receber
 *
 * @pw_element integer $codigo_lancamento_omie Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_complex lcrChave
 */
class LcrChave {
    /**
     * Chave do Lançamento
     *
     * @var integer
     */
    public $codigo_lancamento_omie;
    /**
     * Código do lançamento gerado pelo integrador.
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
}