<?php
namespace Omie\Base\Paises;

/**
 * @service PaisesCadastroJsonClient
 * @author omie
 */
class PaisesCadastroJsonClient extends \Omie\Base\OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='https://app.omie.com.br/api/v1/geral/paises/?WSDL';
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
    public static $_EndPoint='https://app.omie.com.br/api/v1/geral/paises/';

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
     * Lista os países.
     *
     * @param paisListarRequest $paisListarRequest Solicitação de Listagem de Paises.
     * @return paisListarResponse Resposta da listagem de Paises.
     */
    public function ListarPaises(PaisListarRequest $paisListarRequest){
        return self::_Call('ListarPaises',Array(
            $paisListarRequest
        ));
    }
}