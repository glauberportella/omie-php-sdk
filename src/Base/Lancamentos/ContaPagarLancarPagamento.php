<?php

namespace Omie\Base\Lancamentos;


/**
 * Informações para realizar a Baixa do Contas a Pagar.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a pagar.
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element string $codigo_conta_corrente_integracao DEPRECATED
 * @pw_element decimal $valor Valor baixado
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_complex conta_pagar_lancar_pagamento
 */
class ContaPagarLancarPagamento {
    /**
     * Código do lançamento no contas a pagar.
     *
     * @var integer
     */
    public $codigo_lancamento;
    /**
     * Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
     *
     * @var string
     */
    public $codigo_lancamento_integracao;
    /**
     * Código para identificar a baixa do título no Contas a Pagar.
     *
     * @var integer
     */
    public $codigo_baixa;
    /**
     * Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
     *
     * @var string
     */
    public $codigo_baixa_integracao;
    /**
     * Código da Conta Corrente.
     *
     * @var integer
     */
    public $codigo_conta_corrente;
    /**
     * DEPRECATED
     *
     * @var string
     */
    public $codigo_conta_corrente_integracao;
    /**
     * Valor baixado
     *
     * @var decimal
     */
    public $valor;
    /**
     * Valor do desconto.
     *
     * @var decimal
     */
    public $desconto;
    /**
     * Valor do Juros.
     *
     * @var decimal
     */
    public $juros;
    /**
     * Valor da multa.
     *
     * @var decimal
     */
    public $multa;
    /**
     * Data da Baixa
     *
     * @var string
     */
    public $data;
    /**
     * Observação da Baixa do Contas a Receber.
     *
     * @var string
     */
    public $observacao;
}