<?php

namespace Omie\Base\ContaCorrente;


/**
 * Lista de contas correntes
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $descricao Descrição da conta corrente.
 * @pw_element string $codigo_banco Código do banco
 * @pw_element string $codigo_agencia Código da Agência
 * @pw_element string $conta_corrente Número da conta corrente.&nbsp;
 * @pw_element string $nome_gerente Nome do Gerente da Conta Corrente.
 * @pw_element string $tipo Tipo da Conta Corrente
 * @pw_element string $tipo_comunicacao Tipo de comunicação&nbsp;
 * @pw_element string $cSincrAnalitica Sincroniza os Movimentos de Forma Análitica para o PDV
 * @pw_element integer $nTpTef Tipo de TEF
 * @pw_element decimal $nTaxaAdm Taxa da Administradora de Cartões
 * @pw_element integer $nDiasVenc Dias para vencimento&nbsp;
 * @pw_element integer $nNumParc Número máximo de parcelas do Cartão de Credito
 * @pw_element integer $nCodAdm Código da Administradora de Cartões
 * @pw_element string $cUtilPDV Utiliza a Conta Corrente no OmiePDV
 * @pw_element string $cCategoria Código da Categoria para o PDV.
 * @pw_element string $cModalidade Modalidade da Cobrança
 * @pw_element decimal $saldo_inicial Saldo Inicial da Conta Corrente
 * @pw_element string $saldo_data Data do Saldo Inicial da Conta Corrente
 * @pw_element decimal $valor_limite Valor do Limite do Crédito
 * @pw_element string $cTipoCartao Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
 * @pw_complex conta_corrente_lista
 */
class ContaCorrenteLista{
    /**
     * Código da conta corrente no Omie.
     *
     * @var integer
     */
    public $nCodCC;
    /**
     * Código de Integração do Parceiro.
     *
     * @var string
     */
    public $cCodCCInt;
    /**
     * Descrição da conta corrente.
     *
     * @var string
     */
    public $descricao;
    /**
     * Código do banco
     *
     * @var string
     */
    public $codigo_banco;
    /**
     * Código da Agência
     *
     * @var string
     */
    public $codigo_agencia;
    /**
     * Número da conta corrente.&nbsp;
     *
     * @var string
     */
    public $conta_corrente;
    /**
     * Nome do Gerente da Conta Corrente.
     *
     * @var string
     */
    public $nome_gerente;
    /**
     * Tipo da Conta Corrente
     *
     * @var string
     */
    public $tipo;
    /**
     * Tipo de comunicação&nbsp;
     *
     * @var string
     */
    public $tipo_comunicacao;
    /**
     * Sincroniza os Movimentos de Forma Análitica para o PDV
     *
     * @var string
     */
    public $cSincrAnalitica;
    /**
     * Tipo de TEF
     *
     * @var integer
     */
    public $nTpTef;
    /**
     * Taxa da Administradora de Cartões
     *
     * @var decimal
     */
    public $nTaxaAdm;
    /**
     * Dias para vencimento&nbsp;
     *
     * @var integer
     */
    public $nDiasVenc;
    /**
     * Número máximo de parcelas do Cartão de Credito
     *
     * @var integer
     */
    public $nNumParc;
    /**
     * Código da Administradora de Cartões
     *
     * @var integer
     */
    public $nCodAdm;
    /**
     * Utiliza a Conta Corrente no OmiePDV
     *
     * @var string
     */
    public $cUtilPDV;
    /**
     * Código da Categoria para o PDV.
     *
     * @var string
     */
    public $cCategoria;
    /**
     * Modalidade da Cobrança
     *
     * @var string
     */
    public $cModalidade;
    /**
     * Saldo Inicial da Conta Corrente
     *
     * @var decimal
     */
    public $saldo_inicial;
    /**
     * Data do Saldo Inicial da Conta Corrente
     *
     * @var string
     */
    public $saldo_data;
    /**
     * Valor do Limite do Crédito
     *
     * @var decimal
     */
    public $valor_limite;
    /**
     * Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
     *
     * @var string
     */
    public $cTipoCartao;
}