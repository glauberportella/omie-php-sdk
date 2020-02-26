<?php

namespace Omie\Base\Lancamentos;


/**
 * Detalhes do lançamento
 *
 * @pw_element string $nCodInt Código de Integração&nbsp;&nbsp;
 * @pw_element string $COO COO
 * @pw_element string $CCF CCF
 * @pw_complex lancamento_detalhe
 */
class LancamentoDetalhe{
    /**
     * Código de Integração&nbsp;&nbsp;
     *
     * @var string
     */
    public $nCodInt;
    /**
     * COO
     *
     * @var string
     */
    public $COO;
    /**
     * CCF
     *
     * @var string
     */
    public $CCF;
}