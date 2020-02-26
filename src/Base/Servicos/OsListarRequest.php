<?php

namespace Omie\Base\Servicos;


/**
 * Solicitação de Listagem de Ordens de Serviço
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros por página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. <BR>O padrão é 'CODIGO'
 * @pw_element string $ordem_decrescente Ordem Crescente ou Decrescente.
 * @pw_element string $filtrar_por_data_de Filtra os registros até a data especificada.
 * @pw_element string $filtrar_por_data_ate Filtra os registros até a data especificada.
 * @pw_element string $filtrar_apenas_inclusao Filtra os registros exibindos apenas os incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtra os registros exibindos apenas os alterados.
 * @pw_element filtrar_por_codigoArray $filtrar_por_codigo Lista de códigos de Ordem de Serviço.
 * @pw_element string $filtrar_por_status Status da OS:<BR><BR>F-Faturada<BR>N-Não faturada<BR>C-Cancelada<BR>
 * @pw_element string $filtrar_por_etapa Etapa da Ordem de Serviço.
 * @pw_element string $ordem_descrescente Ordem Crescente ou Decrescente.
 * @pw_complex osListarRequest
 */
class OsListarRequest {
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
     * Ordem Crescente ou Decrescente.
     *
     * @var string
     */
    public $ordem_decrescente;
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
     * Lista de códigos de Ordem de Serviço.
     *
     * @var filtrar_por_codigoArray
     */
    public $filtrar_por_codigo;
    /**
     * Status da OS:<BR><BR>F-Faturada<BR>N-Não faturada<BR>C-Cancelada<BR>
     *
     * @var string
     */
    public $filtrar_por_status;
    /**
     * Etapa da Ordem de Serviço.
     *
     * @var string
     */
    public $filtrar_por_etapa;
    /**
     * Ordem Crescente ou Decrescente.
     *
     * @var string
     */
    public $ordem_descrescente;
}