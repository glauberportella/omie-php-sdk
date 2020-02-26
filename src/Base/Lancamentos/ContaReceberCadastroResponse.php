<?php

namespace Omie\Base\Lancamentos;


/**
 * Resposta do Cadastro de Contas a Receber
 *
 * @pw_element integer $codigo_lancamento_omie Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element string $codigo_status Código do Status do processamento
 * @pw_element string $descricao_status Descrição do Status do Lote&nbsp;
 * @pw_complex conta_receber_cadastro_response
 */
class ContaReceberCadastroResponse {
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