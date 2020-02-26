<?php

namespace Omie\Base\Lancamentos;


use Omie\Base\OmieMethodCallParamInterface;

/**
 * Cadastro de contas a pagar.
 *
 * @pw_element integer $codigo_lancamento_omie Código do Lançamento de Contas a Pagar.<BR>Preenchimento automático na inclusão.<BR>Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Contas a Pagar mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.<BR>
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_element integer $codigo_cliente_fornecedor Código do Favorecido / Fornecedor.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
 * @pw_element string $codigo_cliente_fornecedor_integracao Código de Integração do Favorecido / Fornecedor.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag 'codigo_cliente_omie'.<BR>
 * @pw_element string $data_vencimento Data de Vencimento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Esse campo indica a data da vencimento do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element decimal $valor_documento Valor da Conta.<BR>Preenchimento Obrigatório.
 * @pw_element string $codigo_categoria Código da Categoria.<BR>Preenchimento Opcional.<BR><BR>Caso não preenchido, assumirá a categoria padrão para o fornecedor informado. Caso não hajá um específico, retornará erro até que um código de categoria válido seja informado.<BR><BR>Utilize a tag 'codigo' do método 'ListarCategorias' da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
 * @pw_element string $data_previsao Data da Previsão de Pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Caso não informado, assumirá a data de vencimento informada.<BR><BR>Esse campo indica a data da previsão do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element integer $id_conta_corrente Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá o padrão para o fornecedor. Caso não haja um padrão definido, retornará erro até que uma Conta Corrente válida seja informada.<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_element string $numero_documento_fiscal Número da Nota Fiscal associada ao lançamento de Contas a Pagar.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
 * @pw_element string $data_emissao Data de Emissão.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
 * @pw_element string $data_entrada Data de Registro.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
 * @pw_element integer $codigo_projeto Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarProjetos' da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element string $observacao Observações.<BR>Preenchimento Opcional.<BR><BR>Utilize o carater ( | ) pipe como separador de linhas.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR>
 * @pw_element decimal $valor_pis Valor PIS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_pis Reter PIS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_cofins Valor COFINS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_cofins Reter COFINS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_csll Valor CSLL.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.<BR>
 * @pw_element string $retem_csll Reter CSLL.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_ir Valor IR.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_ir Reter IR.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_iss Valor ISS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_iss Reter ISS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element decimal $valor_inss Valor INSS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element string $retem_inss Reter INSS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
 * @pw_element distribuicaoArray $distribuicao Distribuição por Departamentos.<BR>Preenchimento Opcional.<BR><BR>
 * @pw_element string $numero_pedido Número do Pedido.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $codigo_tipo_documento Código do Tipo de Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $numero_documento Número do Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $numero_parcela Número da parcela.<BR>Preenchimento Opcional.<BR><BR>Utilizar o formato '999/999'.<BR><BR>Para 1 parcela utilize '001/001'<BR><BR>Se não informado assumirá o valor '001/001'.<BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>
 * @pw_element string $chave_nfe Chave da NF.e.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element string $codigo_barras_ficha_compensacao Código de Barras<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
 * @pw_element integer $codigo_vendedor Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarVendedores' da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element string $id_origem Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>'APIP' - Integração de Conta a Pagar<BR>'BARP' - Conta a Pagar Importada por Código de Barras<BR>'COMP' - Parcela a Pagar de Compras<BR>'CTEP' - Parcela a Pagar de um CT-e<BR>'DEVP' - Conta a Pagar da Devolução de Venda<BR>'IMPP' - Parcela a Pagar de uma Nota de Importação<BR>'MANP' - Lançamento Manual de Conta a Pagar<BR>'NFEP' - Conta a Pagar Importada de uma NF-e<BR>'RPTP' - Repetição de Contas a Pagar<BR>'XMLP' - Conta a Pagar Importada de um arquivo XML
 * @pw_element info $info Informações sobre a criação/alteração do lançamento de Contas a Pagar.<BR>Preenchimento automático - Não informar.
 * @pw_element string $operacao Código da Operação.&nbsp;.<BR>Preenchimento Automático - Não preencher.<BR><BR>Esse campo indica qual tipo de operação está associada ao lançamento de Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>'01' - Venda de Serviço<BR>'11' - Venda de Produto<BR>'12' - Venda de Produto pelo PDV<BR>'13' - Devolução de Venda<BR>'14' - Remessa de Produto<BR>'16' - Nota Complementar de Saída
 * @pw_element string $status_titulo Status do Título.<BR>Preenchimento automático - Não informar.<BR><BR>Essa informação é retornada na consulta/pesquisa dos lançamentos de Contas a Pagar.
 * @pw_element string $nsu NSU - Número Sequencial Único.<BR>Preenchimento Opcional.<BR><BR>Para lançamentos relacionados a Cartão de Crédito.
 * @pw_element string $acao DEPRECATED
 * @pw_element string $id_conta_corrente_integracao DEPRECATED
 * @pw_element string $bloqueado DEPRECATED
 * @pw_element string $baixa_bloqueada DEPRECATED
 * @pw_element string $codigo_cmc7_cheque DEPRECATED
 * @pw_element string $importado_api Importado pela API (S/N).
 * @pw_complex conta_pagar_cadastro
 */
class ContaPagarCadastro implements OmieMethodCallParamInterface {
    /**
     * Código do Lançamento de Contas a Pagar.<BR>Preenchimento automático na inclusão.<BR>Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Contas a Pagar mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.<BR>
     *
     * @var integer
     */
    public $codigo_lancamento_omie;
    /**
     * Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
    /**
     * Código do Favorecido / Fornecedor.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $codigo_cliente_fornecedor;
    /**
     * Código de Integração do Favorecido / Fornecedor.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag 'codigo_cliente_omie'.<BR>
     *
     * @var string
     */
    public $codigo_cliente_fornecedor_integracao;
    /**
     * Data de Vencimento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Esse campo indica a data da vencimento do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
     *
     * @var string
     */
    public $data_vencimento;
    /**
     * Valor da Conta.<BR>Preenchimento Obrigatório.
     *
     * @var decimal
     */
    public $valor_documento;
    /**
     * Código da Categoria.<BR>Preenchimento Opcional.<BR><BR>Caso não preenchido, assumirá a categoria padrão para o fornecedor informado. Caso não hajá um específico, retornará erro até que um código de categoria válido seja informado.<BR><BR>Utilize a tag 'codigo' do método 'ListarCategorias' da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
     *
     * @var string
     */
    public $codigo_categoria;
    /**
     * Data da Previsão de Pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato 'dd/mm/aaaa'.<BR><BR>Caso não informado, assumirá a data de vencimento informada.<BR><BR>Esse campo indica a data da previsão do título e deve ser informado com uma data igual ou superior a data corrente.<BR>
     *
     * @var string
     */
    public $data_previsao;
    /**
     * Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá o padrão para o fornecedor. Caso não haja um padrão definido, retornará erro até que uma Conta Corrente válida seja informada.<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $id_conta_corrente;
    /**
     * Número da Nota Fiscal associada ao lançamento de Contas a Pagar.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
     *
     * @var string
     */
    public $numero_documento_fiscal;
    /**
     * Data de Emissão.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
     *
     * @var string
     */
    public $data_emissao;
    /**
     * Data de Registro.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a data corrente.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.
     *
     * @var string
     */
    public $data_entrada;
    /**
     * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarProjetos' da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $codigo_projeto;
    /**
     * Observações.<BR>Preenchimento Opcional.<BR><BR>Utilize o carater ( | ) pipe como separador de linhas.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR>
     *
     * @var string
     */
    public $observacao;
    /**
     * Valor PIS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var decimal
     */
    public $valor_pis;
    /**
     * Reter PIS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_pis;
    /**
     * Valor COFINS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var decimal
     */
    public $valor_cofins;
    /**
     * Reter COFINS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_cofins;
    /**
     * Valor CSLL.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.<BR>
     *
     * @var decimal
     */
    public $valor_csll;
    /**
     * Reter CSLL.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_csll;
    /**
     * Valor IR.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var decimal
     */
    public $valor_ir;
    /**
     * Reter IR.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_ir;
    /**
     * Valor ISS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var decimal
     */
    public $valor_iss;
    /**
     * Reter ISS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_iss;
    /**
     * Valor INSS.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var decimal
     */
    public $valor_inss;
    /**
     * Reter INSS.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Se não informado, será assumido 'N' por padrão.<BR><BR>Informação localizada na Aba "Impostos Retidos" do Contas a Pagar.
     *
     * @var string
     */
    public $retem_inss;
    /**
     * Distribuição por Departamentos.<BR>Preenchimento Opcional.<BR><BR>
     *
     * @var distribuicaoArray
     */
    public $distribuicao;
    /**
     * Número do Pedido.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
     *
     * @var string
     */
    public $numero_pedido;
    /**
     * Código do Tipo de Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
     *
     * @var string
     */
    public $codigo_tipo_documento;
    /**
     * Número do Documento.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
     *
     * @var string
     */
    public $numero_documento;
    /**
     * Número da parcela.<BR>Preenchimento Opcional.<BR><BR>Utilizar o formato '999/999'.<BR><BR>Para 1 parcela utilize '001/001'<BR><BR>Se não informado assumirá o valor '001/001'.<BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>
     *
     * @var string
     */
    public $numero_parcela;
    /**
     * Chave da NF.e.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
     *
     * @var string
     */
    public $chave_nfe;
    /**
     * Código de Barras<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.
     *
     * @var string
     */
    public $codigo_barras_ficha_compensacao;
    /**
     * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag 'codigo' do método 'ListarVendedores' da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
     *
     * @var integer
     */
    public $codigo_vendedor;
    /**
     * Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>'APIP' - Integração de Conta a Pagar<BR>'BARP' - Conta a Pagar Importada por Código de Barras<BR>'COMP' - Parcela a Pagar de Compras<BR>'CTEP' - Parcela a Pagar de um CT-e<BR>'DEVP' - Conta a Pagar da Devolução de Venda<BR>'IMPP' - Parcela a Pagar de uma Nota de Importação<BR>'MANP' - Lançamento Manual de Conta a Pagar<BR>'NFEP' - Conta a Pagar Importada de uma NF-e<BR>'RPTP' - Repetição de Contas a Pagar<BR>'XMLP' - Conta a Pagar Importada de um arquivo XML
     *
     * @var string
     */
    public $id_origem;
    /**
     * Informações sobre a criação/alteração do lançamento de Contas a Pagar.<BR>Preenchimento automático - Não informar.
     *
     * @var info
     */
    public $info;
    /**
     * Código da Operação.&nbsp;.<BR>Preenchimento Automático - Não preencher.<BR><BR>Esse campo indica qual tipo de operação está associada ao lançamento de Contas a Pagar.<BR><BR>Os valores disponíveis são:<BR><BR>'01' - Venda de Serviço<BR>'11' - Venda de Produto<BR>'12' - Venda de Produto pelo PDV<BR>'13' - Devolução de Venda<BR>'14' - Remessa de Produto<BR>'16' - Nota Complementar de Saída
     *
     * @var string
     */
    public $operacao;
    /**
     * Status do Título.<BR>Preenchimento automático - Não informar.<BR><BR>Essa informação é retornada na consulta/pesquisa dos lançamentos de Contas a Pagar.
     *
     * @var string
     */
    public $status_titulo;
    /**
     * NSU - Número Sequencial Único.<BR>Preenchimento Opcional.<BR><BR>Para lançamentos relacionados a Cartão de Crédito.
     *
     * @var string
     */
    public $nsu;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $acao;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $id_conta_corrente_integracao;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $bloqueado;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $baixa_bloqueada;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $codigo_cmc7_cheque;
    /**
     * Importado pela API (S/N).
     *
     * @var string
     */
    public $importado_api;
}