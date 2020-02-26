<?php

namespace Omie\Base\Lancamentos;


/**
 * Informações do boleto.
 *
 * @pw_element string $cGerado Gerou boleto (S/N)?
 * @pw_element string $dDtEmBol Data de emissão do boleto.
 * @pw_element string $cNumBoleto Número do boleto.
 * @pw_element string $cNumBancario Número bancário do boleto.
 * @pw_element decimal $nPerJuros Percentual de juros.
 * @pw_element decimal $nPerMulta Percentual de multa.
 * @pw_complex boleto
 */
class Boleto {
    /**
     * Gerou boleto (S/N)?
     *
     * @var string
     */
    public $cGerado;
    /**
     * Data de emissão do boleto.
     *
     * @var string
     */
    public $dDtEmBol;
    /**
     * Número do boleto.
     *
     * @var string
     */
    public $cNumBoleto;
    /**
     * Número bancário do boleto.
     *
     * @var string
     */
    public $cNumBancario;
    /**
     * Percentual de juros.
     *
     * @var decimal
     */
    public $nPerJuros;
    /**
     * Percentual de multa.
     *
     * @var decimal
     */
    public $nPerMulta;
}