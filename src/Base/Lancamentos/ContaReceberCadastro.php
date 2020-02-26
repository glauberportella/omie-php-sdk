<?php

namespace Omie\Base\Lancamentos;


use Omie\Base\OmieMethodCallParamInterface;

/**
 * Cadastro de contas a receber.
 *
 * @pw_element integer $codigo_lancamento_omie Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element integer $codigo_cliente_fornecedor Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_fornecedor_integracao Código do cliente informado pelo integrador.
 * @pw_element string $data_vencimento Data de Vencimento
 * @pw_element decimal $valor_documento Valor do Lançamento
 * @pw_element string $codigo_categoria Código da Categoria
 * @pw_element string $data_previsao Data de Previsão de Pagamento/Recebimento
 * @pw_element integer $id_conta_corrente Id da Conta Corrente
 * @pw_element string $numero_documento Número do Documento
 * @pw_element string $numero_parcela Número da parcela "Formatada" como 999/999
 * @pw_element string $codigo_tipo_documento Código para o Tipo de Documento
 * @pw_element string $numero_documento_fiscal Número do Documento Fiscal
 * @pw_element string $numero_pedido Número do Pedido
 * @pw_element string $chave_nfe Chave de Acesso da NFE
 * @pw_element string $observacao Observação
 * @pw_element string $codigo_barras_ficha_compensacao Código de Barras da Ficha de Compensação
 * @pw_element string $codigo_cmc7_cheque Código CMC7 do Cheque
 * @pw_element string $data_emissao Data de Emissão
 * @pw_element string $id_origem ID da Origem
 * @pw_element string $operacao Operação
 * @pw_element decimal $valor_pis Valor do PIS
 * @pw_element string $retem_pis Indica que o Valor do PIS informado deve ser retido
 * @pw_element decimal $valor_cofins Valor do COFINS
 * @pw_element string $retem_cofins Indica que o Valor do COFINS informado deve ser retido
 * @pw_element decimal $valor_csll Valor do CSLL
 * @pw_element string $retem_csll Indica que o Valor do CSLL informado deve ser retido
 * @pw_element decimal $valor_ir Valor do Imposto de Renda
 * @pw_element string $retem_ir Indica que o Valor do Imposto de Renda  informado deve ser retido
 * @pw_element decimal $valor_iss Valor do ISS
 * @pw_element string $retem_iss Indica que o Valor do ISS informado deve ser retido
 * @pw_element decimal $valor_inss Valor do INSS
 * @pw_element string $retem_inss Indica que o Valor do INSS informado deve ser retido
 * @pw_element string $bloqueado Bloquear lançamento (S/N)
 * @pw_element string $bloquear_baixa bloquear a baixa do lançamento
 * @pw_element string $importado_api Importado pela API (S/N).
 * @pw_element string $baixar_documento Efetua a baixa automática do documento.
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente.
 * @pw_element string $acao A-Adiciona Valor / S-Subtrai valor / L-Lança valor.
 * @pw_element lancamento_detalheArray $lancamento_detalhe Detalhes do lançamento
 * @pw_element distribuicaoArray $distribuicao Distribuição por Departamentos
 * @pw_element string $status_titulo Status do Título
 * @pw_element integer $codigo_vendedor Código do Vendedor
 * @pw_element integer $codigo_projeto Código do Projeto
 * @pw_element string $nsu Número Sequencial Único - Comprovante de pagamento.
 * @pw_element string $data_registro Data de Registro&nbsp;
 * @pw_element string $tipo_agrupamento Tipo de agrupamento dos lançamentos.<BR><BR>Pode ser:<BR>C-Consolidado (sintético).<BR>I-Individual (analítico).<BR><BR>Não deve ser preenchido na Inclusão/alteração pois é de preenchimento automático para lançamentos recebidos do PDV.<BR><BR><BR>
 * @pw_element info $info Informações complemetares.
 * @pw_element boleto $boleto Informações do boleto.
 * @pw_complex conta_receber_cadastro
 */
class ContaReceberCadastro implements OmieMethodCallParamInterface {
    /**
     * Chave do Lançamento
     *
     * @var integer
     */
    public $codigo_lancamento_omie;
    /**
     * Código do lançamento gerado pelo integrador.
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
    /**
     * Código de Cliente / Fornecedor
     *
     * @var integer
     */
    public $codigo_cliente_fornecedor;
    /**
     * Código do cliente informado pelo integrador.
     *
     * @var string
     */
    public $codigo_cliente_fornecedor_integracao;
    /**
     * Data de Vencimento
     *
     * @var string
     */
    public $data_vencimento;
    /**
     * Valor do Lançamento
     *
     * @var decimal
     */
    public $valor_documento;
    /**
     * Código da Categoria
     *
     * @var string
     */
    public $codigo_categoria;
    /**
     * Data de Previsão de Pagamento/Recebimento
     *
     * @var string
     */
    public $data_previsao;
    /**
     * Id da Conta Corrente
     *
     * @var integer
     */
    public $id_conta_corrente;
    /**
     * Número do Documento
     *
     * @var string
     */
    public $numero_documento;
    /**
     * Número da parcela "Formatada" como 999/999
     *
     * @var string
     */
    public $numero_parcela;
    /**
     * Código para o Tipo de Documento
     *
     * @var string
     */
    public $codigo_tipo_documento;
    /**
     * Número do Documento Fiscal
     *
     * @var string
     */
    public $numero_documento_fiscal;
    /**
     * Número do Pedido
     *
     * @var string
     */
    public $numero_pedido;
    /**
     * Chave de Acesso da NFE
     *
     * @var string
     */
    public $chave_nfe;
    /**
     * Observação
     *
     * @var string
     */
    public $observacao;
    /**
     * Código de Barras da Ficha de Compensação
     *
     * @var string
     */
    public $codigo_barras_ficha_compensacao;
    /**
     * Código CMC7 do Cheque
     *
     * @var string
     */
    public $codigo_cmc7_cheque;
    /**
     * Data de Emissão
     *
     * @var string
     */
    public $data_emissao;
    /**
     * ID da Origem
     *
     * @var string
     */
    public $id_origem;
    /**
     * Operação
     *
     * @var string
     */
    public $operacao;
    /**
     * Valor do PIS
     *
     * @var decimal
     */
    public $valor_pis;
    /**
     * Indica que o Valor do PIS informado deve ser retido
     *
     * @var string
     */
    public $retem_pis;
    /**
     * Valor do COFINS
     *
     * @var decimal
     */
    public $valor_cofins;
    /**
     * Indica que o Valor do COFINS informado deve ser retido
     *
     * @var string
     */
    public $retem_cofins;
    /**
     * Valor do CSLL
     *
     * @var decimal
     */
    public $valor_csll;
    /**
     * Indica que o Valor do CSLL informado deve ser retido
     *
     * @var string
     */
    public $retem_csll;
    /**
     * Valor do Imposto de Renda
     *
     * @var decimal
     */
    public $valor_ir;
    /**
     * Indica que o Valor do Imposto de Renda  informado deve ser retido
     *
     * @var string
     */
    public $retem_ir;
    /**
     * Valor do ISS
     *
     * @var decimal
     */
    public $valor_iss;
    /**
     * Indica que o Valor do ISS informado deve ser retido
     *
     * @var string
     */
    public $retem_iss;
    /**
     * Valor do INSS
     *
     * @var decimal
     */
    public $valor_inss;
    /**
     * Indica que o Valor do INSS informado deve ser retido
     *
     * @var string
     */
    public $retem_inss;
    /**
     * Bloquear lançamento (S/N)
     *
     * @var string
     */
    public $bloqueado;
    /**
     * bloquear a baixa do lançamento
     *
     * @var string
     */
    public $bloquear_baixa;
    /**
     * Importado pela API (S/N).
     *
     * @var string
     */
    public $importado_api;
    /**
     * Efetua a baixa automática do documento.
     *
     * @var string
     */
    public $baixar_documento;
    /**
     * Efetua a conciliação do documento automaticamente.
     *
     * @var string
     */
    public $conciliar_documento;
    /**
     * A-Adiciona Valor / S-Subtrai valor / L-Lança valor.
     *
     * @var string
     */
    public $acao;
    /**
     * Detalhes do lançamento
     *
     * @var lancamento_detalheArray
     */
    public $lancamento_detalhe;
    /**
     * Distribuição por Departamentos
     *
     * @var distribuicaoArray
     */
    public $distribuicao;
    /**
     * Status do Título
     *
     * @var string
     */
    public $status_titulo;
    /**
     * Código do Vendedor
     *
     * @var integer
     */
    public $codigo_vendedor;
    /**
     * Código do Projeto
     *
     * @var integer
     */
    public $codigo_projeto;
    /**
     * Número Sequencial Único - Comprovante de pagamento.
     *
     * @var string
     */
    public $nsu;
    /**
     * Data de Registro&nbsp;
     *
     * @var string
     */
    public $data_registro;
    /**
     * Tipo de agrupamento dos lançamentos.<BR><BR>Pode ser:<BR>C-Consolidado (sintético).<BR>I-Individual (analítico).<BR><BR>Não deve ser preenchido na Inclusão/alteração pois é de preenchimento automático para lançamentos recebidos do PDV.<BR><BR><BR>
     *
     * @var string
     */
    public $tipo_agrupamento;
    /**
     * Informações complemetares.
     *
     * @var info
     */
    public $info;
    /**
     * Informações do boleto.
     *
     * @var boleto
     */
    public $boleto;
}