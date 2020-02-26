<?php

namespace Omie\Base\Categoria;

use Omie\Base\OmieJsonClientAbstract;

/**
 * @service CategoriasCadastroJsonClient
 * @author omie
 */
class CategoriasCadastroJsonClient extends OmieJsonClientAbstract {
    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri='http://app.omie.com.br/api/v1/geral/categorias/?WSDL';
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
    public static $_EndPoint='http://app.omie.com.br/api/v1/geral/categorias/';

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
     * Consulta uma categoria
     *
     * @param CategoriaConsultar $categoria_consultar Consulta um código de categoria
     * @return CategoriaCadastro Cadastro de Categorias
     */
    public function ConsultarCategoria(CategoriaConsultar $categoria_consultar){
        return self::_Call('ConsultarCategoria',Array(
            $categoria_consultar
        ));
    }

    /**
     * Lista as categorias cadastradas
     *
     * @param CategoriaListRequest $categoria_list_request Lista as categorias cadastradas.
     * @return CategoriaListfullResponse Retorna a lista de categorias existentes no Omie.
     */
    public function ListarCategorias(CategoriaListRequest $categoria_list_request){
        return self::_Call('ListarCategorias',Array(
            $categoria_list_request
        ));
    }
}