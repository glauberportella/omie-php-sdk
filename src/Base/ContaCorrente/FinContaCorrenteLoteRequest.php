<?php

namespace Omie\Base\ContaCorrente;


/**
 * Request do Lote da Conta Corrente
 *
 * @pw_element integer $lote Identificação do Lote
 * @pw_element fin_conta_corrente_cadastroArray $fin_conta_corrente_cadastro Lista de contas correntes.
 * @pw_complex fin_conta_corrente_lote_request
 */
class FinContaCorrenteLoteRequest{
    /**
     * Identificação do Lote
     *
     * @var integer
     */
    public $lote;
    /**
     * Lista de contas correntes.
     *
     * @var FinContaCorrenteCadastro[]
     */
    public $fin_conta_corrente_cadastro;
}