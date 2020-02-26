<?php

namespace Omie\Base\Lancamentos;


/**
 * Cadastro de Distribuição por Departamento
 *
 * @pw_element string $codigo_contribuicao_social Código da contribuição social apurada no período, conforme a Tabela 4.3.5.
 * @pw_element string $codigo_tipo_credito Código do Tipo do Crédito, conforme Tabela 4.3.6.
 * @pw_element string $conta_financeira Conta Financeira
 * @pw_element string $codigo_base_calculo Código da Base de Cálculo do Crédito
 * @pw_element integer $cst_cofins Código da Situação Tributária do COFINS
 * @pw_element integer $cst_pis Código da Situação Tributária do PIS
 * @pw_element string $job Job
 * @pw_element decimal $percentual_rateio Percentual do rateio
 * @pw_element string $codigo_departamento Código do Departamento
 * @pw_element decimal $valor Valor do rateio
 * @pw_element string $valor_fixado Indica que o valor foi fixado na distribuição do rateio
 * @pw_element integer $chave_lancamento Chave do Lançamento na PAGREC
 * @pw_complex rateio_cadastro
 */
class RateioCadastro{
    /**
     * Código da contribuição social apurada no período, conforme a Tabela 4.3.5.
     *
     * @var string
     */
    public $codigo_contribuicao_social;
    /**
     * Código do Tipo do Crédito, conforme Tabela 4.3.6.
     *
     * @var string
     */
    public $codigo_tipo_credito;
    /**
     * Conta Financeira
     *
     * @var string
     */
    public $conta_financeira;
    /**
     * Código da Base de Cálculo do Crédito
     *
     * @var string
     */
    public $codigo_base_calculo;
    /**
     * Código da Situação Tributária do COFINS
     *
     * @var integer
     */
    public $cst_cofins;
    /**
     * Código da Situação Tributária do PIS
     *
     * @var integer
     */
    public $cst_pis;
    /**
     * Job
     *
     * @var string
     */
    public $job;
    /**
     * Percentual do rateio
     *
     * @var decimal
     */
    public $percentual_rateio;
    /**
     * Código do Departamento
     *
     * @var string
     */
    public $codigo_departamento;
    /**
     * Valor do rateio
     *
     * @var decimal
     */
    public $valor;
    /**
     * Indica que o valor foi fixado na distribuição do rateio
     *
     * @var string
     */
    public $valor_fixado;
    /**
     * Chave do Lançamento na PAGREC
     *
     * @var integer
     */
    public $chave_lancamento;
}