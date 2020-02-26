<?php

namespace Omie\Base\Categoria;


/**
 * Retorna a lista de categorias existentes no Omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element categoria_cadastroArray $categoria_cadastro Cadastro de Categorias
 * @pw_complex categoria_listfull_response
 */
class CategoriaListfullResponse{
    /**
     * Número da página retornada
     *
     * @var integer
     */
    public $pagina;
    /**
     * Número total de páginas
     *
     * @var integer
     */
    public $total_de_paginas;
    /**
     * Número de registros retornados na página.
     *
     * @var integer
     */
    public $registros;
    /**
     * total de registros encontrados
     *
     * @var integer
     */
    public $total_de_registros;
    /**
     * Cadastro de Categorias
     *
     * @var CategoriaCadastro[]
     */
    public $categoria_cadastro;
}