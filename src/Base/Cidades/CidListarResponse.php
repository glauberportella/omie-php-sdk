<?php
namespace Omie\Base\Cidades;

/**
 * Resposta da listagem de Cidades
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros por página.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element lista_cidadesArray $lista_cidades Cadastro de Cidades&nbsp;
 * @pw_complex cidListarResponse
 */
class CidListarResponse {
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
     * Cadastro de Cidades&nbsp;
     *
     * @var ListaCidades[]
     */
    public $lista_cidades;
}