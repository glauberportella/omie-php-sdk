<?php

namespace Omie\Base\Lancamentos;


/**
 * Solicitação de Listagem de Contas a Pagar
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros por página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. <BR>Preenchimento Opcional.<BR><BR>O valor padrão para esse campo é 'CODIGO'.<BR><BR>Os valores disponíveis são:<BR>'CODIGO'<BR>'CODIGO_INTEGRACAO'
 * @pw_element string $ordem_descrescente Exibir em Ordem Crescente ou Decrescente<BR>Preenchimento Opcional.<BR><BR>Informar 'S' para exibir os dados em Ordem Descrescente ou 'N' para exibir os dados em Ordem Crescente.<BR><BR>O valor padrão para esse campo é 'N'.
 * @pw_element string $filtrar_por_data_de Data de fim do filtro.<BR>Preenchimento Opcional.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Serão consideradas as datas de inclusão e alteração do lançamento de Contas a Pagar conforme definido nos campos 'filtrar_apenas_inclusao' e 'filtrar_apenas_alteracao'.<BR>
 * @pw_element string $filtrar_por_data_ate Data de fim do filtro.<BR>Preenchimento Opcional.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Serão consideradas as datas de inclusão e alteração do lançamento de Contas a Pagar conforme definido nos campos 'filtrar_apenas_inclusao' e 'filtrar_apenas_alteracao'.<BR>
 * @pw_element string $filtrar_apenas_inclusao Filtra os registros exibindos apenas os incluídos.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
 * @pw_element string $filtrar_apenas_alteracao Filtra os registros exibindos apenas os alterados.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
 * @pw_element integer $filtrar_conta_corrente Filtrar os lançamentos de Contas a Pagar por código da conta corrente.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.<BR>
 * @pw_element integer $filtrar_cliente Filtrar os lançamentos de Contas a Pagar por código do cliente.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
 * @pw_element string $filtrar_por_cpf_cnpj Filtrar os títulos por CPF/CNPJ.<BR>Preenchimento Opcional.<BR><BR>Informar apenas números.
 * @pw_element string $filtrar_por_status Filtrar por status.<BR>Preenchimento Opcional.<BR><BR>Valores disponíveis:<BR>CANCELADO, <BR>PAGO,<BR>LIQUIDADO <BR>EMABERTO<BR>PAGTO_PARCIAL<BR>VENCEHOJE <BR>AVENCER<BR>ATRASADO
 * @pw_element integer $filtrar_por_projeto Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarProjetos' da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element integer $filtrar_por_vendedor Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarVendedores' da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element string $filtrar_apenas_titulos_em_aberto DEPRECATED.
 * @pw_complex lcpListarRequest
 */
class LcpListarRequest {
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
     * Exibir apenas os registros gerados pela API.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
     *
     * @var string
     */
    public $apenas_importado_api;
    /**
     * Ordem de exibição dos dados. <BR>Preenchimento Opcional.<BR><BR>O valor padrão para esse campo é 'CODIGO'.<BR><BR>Os valores disponíveis são:<BR>'CODIGO'<BR>'CODIGO_INTEGRACAO'
     *
     * @var string
     */
    public $ordenar_por;
    /**
     * Exibir em Ordem Crescente ou Decrescente<BR>Preenchimento Opcional.<BR><BR>Informar 'S' para exibir os dados em Ordem Descrescente ou 'N' para exibir os dados em Ordem Crescente.<BR><BR>O valor padrão para esse campo é 'N'.
     *
     * @var string
     */
    public $ordem_descrescente;
    /**
     * Data de fim do filtro.<BR>Preenchimento Opcional.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Serão consideradas as datas de inclusão e alteração do lançamento de Contas a Pagar conforme definido nos campos 'filtrar_apenas_inclusao' e 'filtrar_apenas_alteracao'.<BR>
     *
     * @var string
     */
    public $filtrar_por_data_de;
    /**
     * Data de fim do filtro.<BR>Preenchimento Opcional.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Serão consideradas as datas de inclusão e alteração do lançamento de Contas a Pagar conforme definido nos campos 'filtrar_apenas_inclusao' e 'filtrar_apenas_alteracao'.<BR>
     *
     * @var string
     */
    public $filtrar_por_data_ate;
    /**
     * Filtra os registros exibindos apenas os incluídos.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
     *
     * @var string
     */
    public $filtrar_apenas_inclusao;
    /**
     * Filtra os registros exibindos apenas os alterados.<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>O valor padrão para esse campo é 'N'.
     *
     * @var string
     */
    public $filtrar_apenas_alteracao;
    /**
     * Filtrar os lançamentos de Contas a Pagar por código da conta corrente.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.<BR>
     *
     * @var integer
     */
    public $filtrar_conta_corrente;
    /**
     * Filtrar os lançamentos de Contas a Pagar por código do cliente.<BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $filtrar_cliente;
    /**
     * Filtrar os títulos por CPF/CNPJ.<BR>Preenchimento Opcional.<BR><BR>Informar apenas números.
     *
     * @var string
     */
    public $filtrar_por_cpf_cnpj;
    /**
     * Filtrar por status.<BR>Preenchimento Opcional.<BR><BR>Valores disponíveis:<BR>CANCELADO, <BR>PAGO,<BR>LIQUIDADO <BR>EMABERTO<BR>PAGTO_PARCIAL<BR>VENCEHOJE <BR>AVENCER<BR>ATRASADO
     *
     * @var string
     */
    public $filtrar_por_status;
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
    /**
     * DEPRECATED.
     *
     * @var string
     */
    public $filtrar_apenas_titulos_em_aberto;
}