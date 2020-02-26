<?php

namespace Omie\Base\Categoria;


/**
 * Lista as categorias cadastradas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex categoria_list_request
 */
class CategoriaListRequest {
    /**
     * Número da página retornada
     *
     * @var integer
     */
    public $pagina;
    /**
     * Número de registros retornados na página.
     *
     * @var integer
     */
    public $registros_por_pagina;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $apenas_importado_api;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $ordenar_por;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $ordem_descrescente;
}