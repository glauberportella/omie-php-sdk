<?php

namespace Omie\Base\ContaCorrente;


/**
 * Resposta da solicitação de listagem resumida da conta corrente.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros por página.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element conta_corrente_listaArray $conta_corrente_lista Lista de contas correntes&nbsp;
 * @pw_complex fin_conta_corrente_resumo_response
 */
class FinContaCorrenteResumoResponse{
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
     * Lista de contas correntes&nbsp;
     *
     * @var ContaCorrenteLista[]    
     */
    public $conta_corrente_lista;
}