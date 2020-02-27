<?php

namespace Omie\Base\Lancamentos;


use Omie\Base\OmieJsonClientAbstract;

/**
 * @service LancamentoContaPagarJsonClient
 * @author omie
 */
class LancamentoContaPagarJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='https://app.omie.com.br/api/v1/financas/contapagar/?WSDL';
    /**
     * The PHP SoapClient object
     *
     * @var object
     */
    public static $_Server=null;
    /**
     * The endpoint URI
     *
     * @var string
     */
    public static $_EndPoint='https://app.omie.com.br/api/v1/financas/contapagar/';

    /**
     * Send a SOAP request to the server
     *
     * @param string $method The method name
     * @param array $param The parameters
     * @return mixed The server response
     */
    public static function _Call($method,$param){
        $call=Array(
            "call"=>$method,
            "param"=>$param,
            "app_key"=>self::$_App->getKey(),
            "app_secret"=>self::$_App->getSecret()
        );
        return json_decode(file_get_contents(self::$_EndPoint."?JSON=".urlencode(json_encode($call))));
    }

    /**
     * Inclui uma conta a Pagar.
     *
     * @param ContaPagarCadastro $conta_pagar_cadastro Cadastro de contas a pagar.
     * @return ContaPagarCadastroResponse Resposta do Cadastro de Contas a Pagar
     */
    public function IncluirContaPagar(ContaPagarCadastro $conta_pagar_cadastro){
        return self::_Call('IncluirContaPagar',Array(
            $conta_pagar_cadastro
        ));
    }

    /**
     * Altera uma conta a pagar
     *
     * @param ContaPagarCadastro $conta_pagar_cadastro Cadastro de contas a pagar.
     * @return ContaPagarCadastroResponse Resposta do Cadastro de Contas a Pagar
     */
    public function AlterarContaPagar(ContaPagarCadastro $conta_pagar_cadastro){
        return self::_Call('AlterarContaPagar',Array(
            $conta_pagar_cadastro
        ));
    }

    /**
     * Exclui uma conta a pagar
     *
     * @param ContaPagarCadastroChave $conta_pagar_cadastro_chave Chave da conta a pagar
     * @return ContaPagarCadastroResponse Resposta do Cadastro de Contas a Pagar
     */
    public function ExcluirContaPagar(ContaPagarCadastroChave $conta_pagar_cadastro_chave){
        return self::_Call('ExcluirContaPagar',Array(
            $conta_pagar_cadastro_chave
        ));
    }

    /**
     * Consulta uma conta a pagar
     *
     * @param ContaPagarCadastroChave $conta_pagar_cadastro_chave Chave da conta a pagar
     * @return ContaPagarCadastro Cadastro de contas a pagar.
     */
    public function ConsultarContaPagar(ContaPagarCadastroChave $conta_pagar_cadastro_chave){
        return self::_Call('ConsultarContaPagar',Array(
            $conta_pagar_cadastro_chave
        ));
    }

    /**
     * Efetua a baixa de um pagamento do contas a pagar.
     *
     * @param ContaPagarLancarPagamento $conta_pagar_lancar_pagamento Informações para realizar a Baixa do Contas a Pagar.
     * @return ContaPagarLancarPagamentoResposta Resultado da baixa realizada para um lançamento do conta a pagar.
     */
    public function LancarPagamento(ContaPagarLancarPagamento $conta_pagar_lancar_pagamento){
        return self::_Call('LancarPagamento',Array(
            $conta_pagar_lancar_pagamento
        ));
    }

    /**
     * Cancela um pagamento realizado no Contas a Pagar
     *
     * @param ContaPagarCancelarPagamento $conta_pagar_cancelar_pagamento Cancela um pagamento realizado para um título do Contas a Pagar.
     * @return ContaPagarCancelarPagamentoResposta Resposta do Cancelamento de um pagamento realizado para um título do Contas a Pagar.
     */
    public function CancelarPagamento(ContaPagarCancelarPagamento $conta_pagar_cancelar_pagamento){
        return self::_Call('CancelarPagamento',Array(
            $conta_pagar_cancelar_pagamento
        ));
    }

    /**
     * Inclusão do contas a pagar por lote
     *
     * @param ContaPagarLote $conta_pagar_lote Inclusão em Lote de contas a pagar&nbsp;
     * @return ContaPagarLoteResponse Resposta do Lançamento de contas a pagar por lote&nbsp;
     */
    public function IncluirContaPagarPorLote(ContaPagarLote $conta_pagar_lote){
        return self::_Call('IncluirContaPagarPorLote',Array(
            $conta_pagar_lote
        ));
    }

    /**
     * Upsert do Contas a Pagar
     *
     * @param ContaPagarCadastro $conta_pagar_cadastro Cadastro de contas a pagar.
     * @return ContaPagarCadastroResponse Resposta do Cadastro de Contas a Pagar
     */
    public function UpsertContaPagar(ContaPagarCadastro $conta_pagar_cadastro){
        return self::_Call('UpsertContaPagar',Array(
            $conta_pagar_cadastro
        ));
    }

    /**
     * Efetua o UPSERT do Contas a Pagar por Lote
     *
     * @param ContaPagarLote $conta_pagar_lote Inclusão em Lote de contas a pagar&nbsp;
     * @return ContaPagarLoteResponse Resposta do Lançamento de contas a pagar por lote&nbsp;
     */
    public function UpsertContaPagarPorLote(ContaPagarLote $conta_pagar_lote){
        return self::_Call('UpsertContaPagarPorLote',Array(
            $conta_pagar_lote
        ));
    }

    /**
     * Listar as Contas a Pagar
     *
     * @param LcpListarRequest $lcpListarRequest Solicitação de Listagem de Contas a Pagar
     * @return LcpListarResponse Resposta da listagem de Contas a Pagar
     */
    public function ListarContasPagar(LcpListarRequest $lcpListarRequest){
        return self::_Call('ListarContasPagar',Array(
            $lcpListarRequest
        ));
    }
}