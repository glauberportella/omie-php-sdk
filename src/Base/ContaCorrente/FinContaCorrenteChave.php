<?php

namespace Omie\Base\ContaCorrente;


/**
 * Chave de pesquisa da Conta Corrente
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_complex fin_conta_corrente_chave
 */
class FinContaCorrenteChave{
    /**
     * Código da conta corrente no Omie.
     *
     * @var integer
     */
    public $nCodCC;
    /**
     * Código de Integração do Parceiro.
     *
     * @var string
     */
    public $cCodCCInt;
}