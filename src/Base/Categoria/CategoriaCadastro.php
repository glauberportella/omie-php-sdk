<?php

namespace Omie\Base\Categoria;


/**
 * Cadastro de Categorias
 *
 * @pw_element string $codigo Código para a Categoria
 * @pw_element string $descricao Descrição para a Categoria
 * @pw_element string $descricao_padrao Descrição Padrão para a Categoria
 * @pw_element string $conta_inativa Indica que a conta está inativo
 * @pw_element string $definida_pelo_usuario Indica que a conta financeira é definida pelo usuário
 * @pw_element integer $id_conta_contabil ID da Conta Contábil
 * @pw_element string $tag_conta_contabil Tag para Conta Contábil
 * @pw_element string $conta_despesa Quando S, indica que é conta de despesa
 * @pw_element string $nao_exibir Indica que a Categoria não deve ser exibida em ComboBox
 * @pw_element string $natureza Descrição da Natureza da conta
 * @pw_element string $conta_receita Quando S, indica que é conta de receita
 * @pw_element string $totalizadora Quando S, indica que é totalizadora de conta
 * @pw_element string $transferencia Quando S, indica que é categoria de transferência
 * @pw_element string $codigo_dre Código no DRE
 * @pw_complex categoria_cadastro
 */
class CategoriaCadastro{
    /**
     * Código para a Categoria
     *
     * @var string
     */
    public $codigo;
    /**
     * Descrição para a Categoria
     *
     * @var string
     */
    public $descricao;
    /**
     * Descrição Padrão para a Categoria
     *
     * @var string
     */
    public $descricao_padrao;
    /**
     * Indica que a conta está inativo
     *
     * @var string
     */
    public $conta_inativa;
    /**
     * Indica que a conta financeira é definida pelo usuário
     *
     * @var string
     */
    public $definida_pelo_usuario;
    /**
     * ID da Conta Contábil
     *
     * @var integer
     */
    public $id_conta_contabil;
    /**
     * Tag para Conta Contábil
     *
     * @var string
     */
    public $tag_conta_contabil;
    /**
     * Quando S, indica que é conta de despesa
     *
     * @var string
     */
    public $conta_despesa;
    /**
     * Indica que a Categoria não deve ser exibida em ComboBox
     *
     * @var string
     */
    public $nao_exibir;
    /**
     * Descrição da Natureza da conta
     *
     * @var string
     */
    public $natureza;
    /**
     * Quando S, indica que é conta de receita
     *
     * @var string
     */
    public $conta_receita;
    /**
     * Quando S, indica que é totalizadora de conta
     *
     * @var string
     */
    public $totalizadora;
    /**
     * Quando S, indica que é categoria de transferência
     *
     * @var string
     */
    public $transferencia;
    /**
     * Código no DRE
     *
     * @var string
     */
    public $codigo_dre;
}