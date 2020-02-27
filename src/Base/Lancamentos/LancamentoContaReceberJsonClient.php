<?php

namespace Omie\Base\Lancamentos;

use Omie\Base\OmieJsonClientAbstract;

/**
 * @service LancamentoContaReceberJsonClient
 * @author omie
 */
class LancamentoContaReceberJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='https://app.omie.com.br/api/v1/financas/contareceber/?WSDL';
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
    public static $_EndPoint='https://app.omie.com.br/api/v1/financas/contareceber/';

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
     * Inclui uma conta a Receber
     *
     * @param ContaReceberCadastro $conta_receber_cadastro Cadastro de contas a receber.
     * @return ContaReceberCadastroResponse Resposta do Cadastro de Contas a Receber
     */
    public function IncluirContaReceber(ContaReceberCadastro $conta_receber_cadastro){
        return self::_Call('IncluirContaReceber',Array(
            $conta_receber_cadastro
        ));
    }

    /**
     * Altera um conta a receber
     *
     * @param ContaReceberCadastro $conta_receber_cadastro Cadastro de contas a receber.
     * @return ContaReceberCadastroResponse Resposta do Cadastro de Contas a Receber
     */
    public function AlterarContaReceber(ContaReceberCadastro $conta_receber_cadastro){
        return self::_Call('AlterarContaReceber',Array(
            $conta_receber_cadastro
        ));
    }

    /**
     * Exclui uma conta a receber
     *
     * @param ContaReceberCadastroChave $conta_receber_cadastro_chave Chave da conta a a receber
     * @return ContaReceberCadastroResponse Resposta do Cadastro de Contas a Receber
     */
    public function ExcluirContaReceber(ContaReceberCadastroChave $conta_receber_cadastro_chave){
        return self::_Call('ExcluirContaReceber',Array(
            $conta_receber_cadastro_chave
        ));
    }

    /**
     * Inclui uma distribuição por departamento para uma conta a receber
     *
     * @param RateioCadastro $rateio_cadastro Cadastro de Distribuição por Departamento
     * @return ContaReceberCadastroChave Chave da conta a a receber
     */
    public function IncluirDistribuicaoDepartamento(RateioCadastro $rateio_cadastro){
        return self::_Call('IncluirDistribuicaoDepartamento',Array(
            $rateio_cadastro
        ));
    }

    /**
     * Altera a distribuição por departamento de uma conta a receber.
     *
     * @param RateioCadastro $rateio_cadastro Cadastro de Distribuição por Departamento
     * @return ContaReceberCadastroChave Chave da conta a a receber
     */
    public function AlterarDistribuicaoDepartamento(RateioCadastro $rateio_cadastro){
        return self::_Call('AlterarDistribuicaoDepartamento',Array(
            $rateio_cadastro
        ));
    }

    /**
     * Exclui a distribuição de departamento da conta a receber.
     *
     * @param ContaReceberCadastroChave $conta_receber_cadastro_chave Chave da conta a a receber
     * @return ContaReceberCadastroResponse Resposta do Cadastro de Contas a Receber
     */
    public function ExcluirDistribuicaoDepartamento(ContaReceberCadastroChave $conta_receber_cadastro_chave){
        return self::_Call('ExcluirDistribuicaoDepartamento',Array(
            $conta_receber_cadastro_chave
        ));
    }

    /**
     * Realiza a baixa de um título no conta a receber.
     *
     * @param ContaReceberLancarRecebimento $conta_receber_lancar_recebimento Informações para realizada a Baixa do Contas a Receber.
     * @return ContaReceberLancarRecebimentoResposta Resultado da baixa realizada para um lançamento do conta a receber.
     */
    public function LancarRecebimento(ContaReceberLancarRecebimento $conta_receber_lancar_recebimento){
        return self::_Call('LancarRecebimento',Array(
            $conta_receber_lancar_recebimento
        ));
    }

    /**
     * Efetua o cancelamento de um recebimento de Contas a Receber.
     *
     * @param ContaReceberCancelarRecebimento $conta_receber_cancelar_recebimento Requisição de cancelamento de lançamento de baixa do recebimento.
     * @return ContaReceberCancelarRecebimentoResposta Resposta do cancelamento da baixa.&nbsp;
     */
    public function CancelarRecebimento(ContaReceberCancelarRecebimento $conta_receber_cancelar_recebimento){
        return self::_Call('CancelarRecebimento',Array(
            $conta_receber_cancelar_recebimento
        ));
    }

    /**
     * Efetua a conciliação da baixa
     *
     * @param ContaReceberConciliarRequest $conta_receber_conciliar_request Realiza a conciliação do documento
     * @return ContaReceberConciliarResponse Response da conciliação da Conta a Pagar
     */
    public function ConciliarRecebimento(ContaReceberConciliarRequest $conta_receber_conciliar_request){
        return self::_Call('ConciliarRecebimento',Array(
            $conta_receber_conciliar_request
        ));
    }

    /**
     * Desconciliar o Recebimento
     *
     * @param ContaReceberConciliarRequest $conta_receber_conciliar_request Realiza a conciliação do documento
     * @return ContaReceberConciliarResponse Response da conciliação da Conta a Pagar
     */
    public function DesconciliarRecebimento(ContaReceberConciliarRequest $conta_receber_conciliar_request){
        return self::_Call('DesconciliarRecebimento',Array(
            $conta_receber_conciliar_request
        ));
    }

    /**
     * Incluir Lançamentos de contas a receber por lote.
     *
     * @param ContaReceberLote $conta_receber_lote Inclusão de Contas a Receber por Lote
     * @return ContaReceberLoteResponse Resposta do Lançamento de contas a receber por lote&nbsp;
     */
    public function IncluirContaReceberPorLote(ContaReceberLote $conta_receber_lote){
        return self::_Call('IncluirContaReceberPorLote',Array(
            $conta_receber_lote
        ));
    }

    /**
     * Executa o Upsert do Contas a receber
     *
     * @param ContaReceberCadastro $conta_receber_cadastro Cadastro de contas a receber.
     * @return ContaReceberCadastroResponse Resposta do Cadastro de Contas a Receber
     */
    public function UpsertContaReceber(ContaReceberCadastro $conta_receber_cadastro){
        return self::_Call('UpsertContaReceber',Array(
            $conta_receber_cadastro
        ));
    }

    /**
     * Efetua o UPSERT do Contas a Receber por Lote.
     *
     * @param ContaReceberLote $conta_receber_lote Inclusão de Contas a Receber por Lote
     * @return ContaReceberLoteResponse Resposta do Lançamento de contas a receber por lote&nbsp;
     */
    public function UpsertContaReceberPorLote(ContaReceberLote $conta_receber_lote){
        return self::_Call('UpsertContaReceberPorLote',Array(
            $conta_receber_lote
        ));
    }

    /**
     * Consulta uma Conta a Pagar
     *
     * @param LcrChave $lcrChave Chave de pesquisa do Lançamento de Contas a Receber
     * @return ContaReceberCadastro Cadastro de contas a receber.
     */
    public function ConsultarContaReceber(LcrChave $lcrChave){
        return self::_Call('ConsultarContaReceber',Array(
            $lcrChave
        ));
    }

    /**
     * Lista as contas a receber cadastradas.
     *
     * @param LcrListarRequest $lcrListarRequest Solicitação de Listagem de Contas a Receber
     * @return LcrListarResponse Resposta da listagem de Contas a Receber
     */
    public function ListarContasReceber(LcrListarRequest $lcrListarRequest){
        return self::_Call('ListarContasReceber',Array(
            $lcrListarRequest
        ));
    }
}