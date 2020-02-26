<?php

namespace Omie\Base\Lancamentos;


/**
 * Resposta da listagem de Contas a Pagar
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros por página.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element conta_pagar_cadastroArray $conta_pagar_cadastro Cadastro de contas a pagar.
 * @pw_complex lcpListarResponse
 */
class LcpListarResponse {
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
     * Cadastro de contas a pagar.
     *
     * @var ContaPagarCadastro[]
     */
    public $conta_pagar_cadastro;
}