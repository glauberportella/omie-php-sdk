<?php

namespace Omie\Base\Lancamentos;


/**
 * Chave da conta a pagar
 *
 * @pw_element integer $codigo_lancamento_omie Código do Lançamento de Contas a Pagar.<BR>Preenchimento automático na inclusão.<BR>Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Contas a Pagar mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.<BR>
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_complex conta_pagar_cadastro_chave
 */
class ContaPagarCadastroChave{
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
}