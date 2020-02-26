<?php

namespace Omie\Base\Servicos;

use Omie\Base\OmieJsonClientAbstract;

/**
 * @service OrdemServicoJsonClient
 * @author omie
 */
class OrdemServicoJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='http://app.omie.com.br/api/v1/servicos/os/?WSDL';
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
    public static $_EndPoint='http://app.omie.com.br/api/v1/servicos/os/';

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
     * Operação para incluir uma Ordem de Serviço
     *
     * @param OsCadastro $osCadastro Cadastro de Ordem de Serviço
     * @return OsStatus Retorno do cadastro da Ordem de Serviço
     */
    public function IncluirOS(OsCadastro $osCadastro){
        return self::_Call('IncluirOS',Array(
            $osCadastro
        ));
    }

    /**
     * Consulta
     *
     * @param OsChave $osChave Chave de Pesquisa da Ordem de Serviço
     * @return OsCadastro Cadastro de Ordem de Serviço
     */
    public function ConsultarOS(OsChave $osChave){
        return self::_Call('ConsultarOS',Array(
            $osChave
        ));
    }

    /**
     * Lista as Ordens de Serviços.
     *
     * @param OsListarRequest $osListarRequest Solicitação de Listagem de Ordens de Serviço
     * @return OsListarResponse Resposta da listagem de Ordens de Serviço
     */
    public function ListarOS(OsListarRequest $osListarRequest){
        return self::_Call('ListarOS',Array(
            $osListarRequest
        ));
    }

    /**
     * Retorna o Status da Ordem de Serviço
     *
     * @param OsStatusRequest $osStatusRequest Solicitação de Status da Ordem de Serviço
     * @return OsStatusResponse Resposta da solicitação do Status da Ordem de Serviço
     */
    public function StatusOS(OsStatusRequest $osStatusRequest){
        return self::_Call('StatusOS',Array(
            $osStatusRequest
        ));
    }

    /**
     * Troca a Etapa da Ordem de Serviço.
     *
     * @param OsTrocarEtapaRequest $osTrocarEtapaRequest Solicitação de troca de etapa da Ordem de Serviço.
     * @return OsTrocarEtapaResponse Resposta da solicitação de troca de etapa da Ordem de Serviço.
     */
    public function TrocarEtapaOS(OsTrocarEtapaRequest $osTrocarEtapaRequest){
        return self::_Call('TrocarEtapaOS',Array(
            $osTrocarEtapaRequest
        ));
    }
}