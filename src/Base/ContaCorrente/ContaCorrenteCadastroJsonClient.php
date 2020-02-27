<?php

namespace Omie\Base\ContaCorrente;

use Omie\Base\OmieJsonClientAbstract;

/**
 * @service ContaCorrenteCadastroJsonClient
 * @author omie
 */
class ContaCorrenteCadastroJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='https://app.omie.com.br/api/v1/geral/contacorrente/?WSDL';
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
    public static $_EndPoint='https://app.omie.com.br/api/v1/geral/contacorrente/';

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
     * Inclui uma conta corrente
     *
     * @param ListarContasCorrentes $ListarContasCorrentes Lista de contas correntes.
     * @return FinContaCorrenteCadastroResponse Response do cadastro do conta corrente.
     */
    public function IncluirContaCorrente(ListarContasCorrentes $ListarContasCorrentes){
        return self::_Call('IncluirContaCorrente',Array(
            $ListarContasCorrentes
        ));
    }

    /**
     * Altera a Conta Corrente
     *
     * @param ListarContasCorrentes $ListarContasCorrentes Lista de contas correntes.
     * @return FinContaCorrenteCadastroResponse Response do cadastro do conta corrente.
     */
    public function AlterarContaCorrente(ListarContasCorrentes $ListarContasCorrentes){
        return self::_Call('AlterarContaCorrente',Array(
            $ListarContasCorrentes
        ));
    }

    /**
     * Excluir a Conta Corrente
     *
     * @param FinContaCorrenteChave $fin_conta_corrente_chave Chave de pesquisa da Conta Corrente
     * @return FinContaCorrenteCadastroResponse Response do cadastro do conta corrente.
     */
    public function ExcluirContaCorrente(FinContaCorrenteChave $fin_conta_corrente_chave){
        return self::_Call('ExcluirContaCorrente',Array(
            $fin_conta_corrente_chave
        ));
    }

    /**
     * Realiza a consulta de uma conta corrente
     *
     * @param FinContaCorrenteChave $fin_conta_corrente_chave Chave de pesquisa da Conta Corrente
     * @return ListarContasCorrentes Lista de contas correntes.
     */
    public function ConsultarContaCorrente(FinContaCorrenteChave $fin_conta_corrente_chave){
        return self::_Call('ConsultarContaCorrente',Array(
            $fin_conta_corrente_chave
        ));
    }

    /**
     * DEPRECATED
     *
     * @param FinContaCorrentePesquisar $fin_conta_corrente_pesquisar DEPRECATED
     * @return FinContaCorrentePesquisarResposta DEPRECATED
     */
    public function PesquisarContaCorrente(FinContaCorrentePesquisar $fin_conta_corrente_pesquisar){
        return self::_Call('PesquisarContaCorrente',Array(
            $fin_conta_corrente_pesquisar
        ));
    }

    /**
     * Upsert da Conta Corrente
     *
     * @param ListarContasCorrentes $ListarContasCorrentes Lista de contas correntes.
     * @return FinContaCorrenteCadastroResponse Response do cadastro do conta corrente.
     */
    public function UpsertContaCorrente(ListarContasCorrentes $ListarContasCorrentes){
        return self::_Call('UpsertContaCorrente',Array(
            $ListarContasCorrentes
        ));
    }

    /**
     * Upsert por lote de Conta Corrente
     *
     * @param FinContaCorrenteLoteRequest $fin_conta_corrente_lote_request Request do Lote da Conta Corrente
     * @return FinContaCorrenteLoteResponse Response do conta corrente
     */
    public function UpsertContaCorrentePorLote(FinContaCorrenteLoteRequest $fin_conta_corrente_lote_request){
        return self::_Call('UpsertContaCorrentePorLote',Array(
            $fin_conta_corrente_lote_request
        ));
    }

    /**
     * Listar Contas Correntes
     *
     * @param FinContaCorrenteListarRequest $fin_conta_corrente_listar_request Retorno da solicitação da listagem de contas correntes cadastradas no Omie.
     * @return FinContaCorrenteListarResponse Solicitação da listagem de Contas Correntes encontradas.
     */
    public function ListarContasCorrentes(FinContaCorrenteListarRequest $fin_conta_corrente_listar_request){
        return self::_Call('ListarContasCorrentes',Array(
            $fin_conta_corrente_listar_request
        ));
    }

    /**
     * Listar resumida de Contas correntes.
     *
     * @param FinContaCorrenteResumoRequest $fin_conta_corrente_resumo_request Solicitação da listagem resumida de contas correntes.
     * @return FinContaCorrenteResumoResponse Resposta da solicitação de listagem resumida da conta corrente.
     */
    public function ListarResumoContasCorrentes(FinContaCorrenteResumoRequest $fin_conta_corrente_resumo_request){
        return self::_Call('ListarResumoContasCorrentes',Array(
            $fin_conta_corrente_resumo_request
        ));
    }
}