<?php

namespace Omie\Base\Lancamentos;


/**
 * Resultado da baixa realizada para um lançamento do conta a pagar.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a pagar.
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_element string $liquidado Indica que o recebimento liquidado.
 * @pw_element decimal $valor_baixado Valor baixado
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_pagar_lancar_pagamento_resposta
 */
class ContaPagarLancarPagamentoResposta{
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
     * Indica que o recebimento liquidado.
     *
     * @var string
     */
    public $liquidado;
    /**
     * Valor baixado
     *
     * @var decimal
     */
    public $valor_baixado;
    /**
     * Código do Status do processamento
     *
     * @var string
     */
    public $codigo_status;
    /**
     * Descrição do Status do Lote&nbsp;
     *
     * @var string
     */
    public $descricao_status;
}