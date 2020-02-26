<?php

namespace Omie\Base\ContaCorrente;


/**
 * Solicitação da listagem de Contas Correntes encontradas.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros por página.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element ListarContasCorrentesArray $ListarContasCorrentes Lista de contas correntes.
 * @pw_complex fin_conta_corrente_listar_response
 */
class FinContaCorrenteListarResponse{
    /**
     * Número da página que será listada.
     *
     * @var integer
     */
    public $pagina;
    /**
     * Total de páginas encontradas.
     *
     * @var integer
     */
    public $total_de_paginas;
    /**
     * Número de registros por página.
     *
     * @var integer
     */
    public $registros;
    /**
     * Total de registros encontrados.
     *
     * @var integer
     */
    public $total_de_registros;
    /**
     * Lista de contas correntes.
     *
     * @var ListarContasCorrentes[]
     */
    public $ListarContasCorrentes;
}