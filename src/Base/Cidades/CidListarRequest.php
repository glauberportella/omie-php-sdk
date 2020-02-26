<?php
namespace Omie\Base\Cidades;

/**
 * Solicitação de Listagem de Cidades
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros por página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. <BR>O padrão é 'CODIGO'
 * @pw_element string $ordem_descrescente Exibir em Ordem Crescente ou Decrescente
 * @pw_element string $filtrar_por_data_de Filtra os registros até a data especificada.
 * @pw_element string $filtrar_por_data_ate Filtra os registros até a data especificada.
 * @pw_element string $filtrar_apenas_inclusao Filtra os registros exibindos apenas os incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtra os registros exibindos apenas os alterados.
 * @pw_element string $filtrar_cidade_contendo Nome completo (Cidade+UF)
 * @pw_element string $filtrar_por_uf Estado da Empresa
 * @pw_element string $filtrar_por_cidade Código da Cidade
 * @pw_complex cidListarRequest
 */
class CidListarRequest{
    /**
     * Número da página que será listada.
     *
     * @var integer
     */
    public $pagina;
    /**
     * Número de registros por página.
     *
     * @var integer
     */
    public $registros_por_pagina;
    /**
     * Exibir apenas os registros gerados pela API.
     *
     * @var string
     */
    public $apenas_importado_api;
    /**
     * Ordem de exibição dos dados. <BR>O padrão é 'CODIGO'
     *
     * @var string
     */
    public $ordenar_por;
    /**
     * Exibir em Ordem Crescente ou Decrescente
     *
     * @var string
     */
    public $ordem_descrescente;
    /**
     * Filtra os registros até a data especificada.
     *
     * @var string
     */
    public $filtrar_por_data_de;
    /**
     * Filtra os registros até a data especificada.
     *
     * @var string
     */
    public $filtrar_por_data_ate;
    /**
     * Filtra os registros exibindos apenas os incluídos.
     *
     * @var string
     */
    public $filtrar_apenas_inclusao;
    /**
     * Filtra os registros exibindos apenas os alterados.
     *
     * @var string
     */
    public $filtrar_apenas_alteracao;
    /**
     * Nome completo (Cidade+UF)
     *
     * @var string
     */
    public $filtrar_cidade_contendo;
    /**
     * Estado da Empresa
     *
     * @var string
     */
    public $filtrar_por_uf;
    /**
     * Código da Cidade
     *
     * @var string
     */
    public $filtrar_por_cidade;
}