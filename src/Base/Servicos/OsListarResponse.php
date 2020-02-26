<?php

namespace Omie\Base\Servicos;


/**
 * Resposta da listagem de Ordens de Serviço
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros por página.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element osCadastroArray $osCadastro Cadastro de Ordem de Serviço
 * @pw_complex osListarResponse
 */
class OsListarResponse{
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
     * Cadastro de Ordem de Serviço
     *
     * @var OsCadastro[]
     */
    public $osCadastro;
}