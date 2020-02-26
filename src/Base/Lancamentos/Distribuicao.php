<?php

namespace Omie\Base\Lancamentos;


/**
 * Distribuição por Departamentos.
 *
 * @pw_element string $cCodDep Código do Departamento
 * @pw_element string $cDesDep Descrição do Departamento
 * @pw_element decimal $nValDep Valor do rateio
 * @pw_element decimal $nPerDep Percentual do rateio
 * @pw_complex distribuicao
 */
class Distribuicao{
    /**
     * Código do Departamento
     *
     * @var string
     */
    public $cCodDep;
    /**
     * Descrição do Departamento
     *
     * @var string
     */
    public $cDesDep;
    /**
     * Valor do rateio
     *
     * @var decimal
     */
    public $nValDep;
    /**
     * Percentual do rateio
     *
     * @var decimal
     */
    public $nPerDep;
}