<?php

namespace Omie\Base\Servicos;


use Omie\Base\OmieJsonClientAbstract;

/**
 * @service OrdemServicoFaturamentoJsonClient
 * @author omie
 */
class OrdemServicoFaturamentoJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='http://app.omie.com.br/api/v1/servicos/osp/?WSDL';
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
    public static $_EndPoint='http://app.omie.com.br/api/v1/servicos/osp/';

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
     * Valida uma Ordem de Serviço para faturamento.
     *
     * @param OsValidarRequest $osValidarRequest Solicitação de validação da Ordem de Serviço.
     * @return OsValidarResponse Resposta da solicitação de validação da Ordem de Serviço.
     */
    public function ValidarOS(OsValidarRequest $osValidarRequest){
        return self::_Call('ValidarOS',Array(
            $osValidarRequest
        ));
    }

    /**
     * Fatura uma Ordem de Serviço.
     *
     * @param OsFaturarRequest $osFaturarRequest Solicitação de validação da Ordem de Serviço.
     * @return OsFaturarResponse Resposta da solicitação de faturamento da Ordem de Serviço.
     */
    public function FaturarOS(OsFaturarRequest $osFaturarRequest){
        return self::_Call('FaturarOS',Array(
            $osFaturarRequest
        ));
    }

    /**
     * Cancela um Ordem de Serviço faturada
     *
     * @param OsCancelarRequest $osCancelarRequest Solicitação de cancelamento da Ordem de Serviço.
     * @return OsCancelarResponse Resposta da solicitação de cancelamento da Ordem de Serviço.
     */
    public function CancelarOS(OsCancelarRequest $osCancelarRequest){
        return self::_Call('CancelarOS',Array(
            $osCancelarRequest
        ));
    }

    /**
     * Duplica uma Ordem de Serviço.
     *
     * @param OsDuplicarRequest $osDuplicarRequest Solicitação de duplicação da Ordem de Serviço.
     * @return OsDuplicarResponse Resposta da solicitação de duplicação da Ordem de Serviço.
     */
    public function DuplicarOS(OsDuplicarRequest $osDuplicarRequest){
        return self::_Call('DuplicarOS',Array(
            $osDuplicarRequest
        ));
    }

    /**
     * Associa o código de integração a uma Ordem de Serviço.
     *
     * @param OsAssociarCodIntRequest $osAssociarCodIntRequest Solicitação de alteração do código de integração da Ordem de Serviço.
     * @return OsAssociarCodIntResponse Resposta da solicitação de alteração do código de integração da Ordem de Serviço.
     */
    public function AssociarCodIntOS(OsAssociarCodIntRequest $osAssociarCodIntRequest){
        return self::_Call('AssociarCodIntOS',Array(
            $osAssociarCodIntRequest
        ));
    }
}