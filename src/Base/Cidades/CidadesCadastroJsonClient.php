<?php

namespace Omie\Base\Cidades;

use Omie\Base\OmieJsonClientAbstract;

class CidadesCadastroJsonClient extends OmieJsonClientAbstract
{
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='https://app.omie.com.br/api/v1/geral/cidades/?WSDL';
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
    public static $_EndPoint='https://app.omie.com.br/api/v1/geral/cidades/';

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
     * Obtém a lista das Cidades
     *
     * @param cidListarRequest $cidListarRequest Solicitação de Listagem de Cidades
     * @return cidListarResponse Resposta da listagem de Cidades
     */
    public function PesquisarCidades(CidListarRequest $cidListarRequest){
        return self::_Call('PesquisarCidades',Array(
            $cidListarRequest
        ));
    }
}