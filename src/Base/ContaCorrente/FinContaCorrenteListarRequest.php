<?php

namespace Omie\Base\ContaCorrente;


/**
 * Retorno da solicitação da listagem de contas correntes cadastradas no Omie.
 *
 * @pw_element integer $codigo Código da conta corrente no Omie.
 * @pw_element string $codigo_integracao Código de Integração do Parceiro.
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros por página.
 * @pw_element string $apenas_importado_api Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
 * @pw_element string $ordenar_por Ordem de exibição dos dados. <BR>O padrão é 'CODIGO'
 * @pw_element string $ordem_descrescente Exibir em Ordem Crescente ou Decrescente
 * @pw_element string $filtrar_por_data_de Filtra os registros até a data especificada.
 * @pw_element string $filtrar_por_data_ate Filtra os registros até a data especificada.
 * @pw_element string $filtrar_apenas_inclusao Filtra os registros exibindos apenas os incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtra os registros exibindos apenas os alterados.
 * @pw_complex fin_conta_corrente_listar_request
 */
class FinContaCorrenteListarRequest{
    /**
     * Código da conta corrente no Omie.
     *
     * @var integer
     */
    public $codigo;
    /**
     * Código de Integração do Parceiro.
     *
     * @var string
     */
    public $codigo_integracao;
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
     * Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
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
}