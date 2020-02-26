<?php

namespace Omie\Base\Lancamentos;


/**
 * Solicitação de Listagem de Contas a Receber
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
 * @pw_element integer $filtrar_conta_corrente Código da Conta Corrente
 * @pw_element string $filtrar_apenas_titulos_em_aberto Filtra os registros exibindos apenas os titulos em aberto
 * @pw_element integer $filtrar_cliente Filtra os registros exibindos por cliente
 * @pw_element string $filtrar_por_status Filtrar por Status
 * @pw_element string $filtrar_por_cpf_cnpj Filtrar os títulos por CPF/CNPJ
 * @pw_element integer $filtrar_por_projeto Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarProjetos' da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element integer $filtrar_por_vendedor Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarVendedores' da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_complex lcrListarRequest
 */
class LcrListarRequest {
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
     * Código da Conta Corrente
     *
     * @var integer
     */
    public $filtrar_conta_corrente;
    /**
     * Filtra os registros exibindos apenas os titulos em aberto
     *
     * @var string
     */
    public $filtrar_apenas_titulos_em_aberto;
    /**
     * Filtra os registros exibindos por cliente
     *
     * @var integer
     */
    public $filtrar_cliente;
    /**
     * Filtrar por Status
     *
     * @var string
     */
    public $filtrar_por_status;
    /**
     * Filtrar os títulos por CPF/CNPJ
     *
     * @var string
     */
    public $filtrar_por_cpf_cnpj;
    /**
     * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarProjetos' da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $filtrar_por_projeto;
    /**
     * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarVendedores' da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $filtrar_por_vendedor;
}