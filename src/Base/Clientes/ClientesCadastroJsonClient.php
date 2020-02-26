<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieJsonClientAbstract;
use Omie\Base\OmieJsonClientInterface;
use Omie\Core\App;

/**
 * @service ClientesCadastroJsonClient
 * @author omie
 */
class ClientesCadastroJsonClient extends OmieJsonClientAbstract {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	public static $_WsdlUri='http://app.omie.com.br/api/v1/geral/clientes/?WSDL';
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
	public static $_EndPoint='http://app.omie.com.br/api/v1/geral/clientes/';
	
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
	 * Inclui o cliente no Omie
	 *
	 * @param ClientesCadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return ClientesStatus Status de retorno do cadastro de clientes.
	 */
	public function IncluirCliente(ClientesCadastro $clientes_cadastro){
		return self::_Call('IncluirCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Altera os dados do cliente
	 *
	 * @param ClientesCadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return ClientesStatus Status de retorno do cadastro de clientes.
	 */
	public function AlterarCliente(ClientesCadastro $clientes_cadastro){
		return self::_Call('AlterarCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Exclui um cliente da base de dados.
	 *
	 * @param ClientesCadastroChave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return ClientesStatus Status de retorno do cadastro de clientes.
	 */
	public function ExcluirCliente(ClientesCadastroChave $clientes_cadastro_chave){
		return self::_Call('ExcluirCliente',Array(
			$clientes_cadastro_chave
		));
	}

	/**
	 * Consulta os dados de um cliente
	 *
	 * @param ClientesCadastroChave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return ClientesCadastro Cadastro reduzido de produtos
	 */
	public function ConsultarCliente(ClientesCadastroChave $clientes_cadastro_chave){
		return self::_Call('ConsultarCliente',Array(
			$clientes_cadastro_chave
		));
	}

	/**
	 * Lista os clientes cadastrados
	 *
	 * @param ClientesListRequest $clientes_list_request Lista os clientes cadastrados
	 * @return ClientesListfullResponse Lista de clientes cadastrados no omie.
	 */
	public function ListarClientes(ClientesListRequest $clientes_list_request){
		return self::_Call('ListarClientes',Array(
			$clientes_list_request
		));
	}

	/**
	 * Realiza pesquisa dos clientes
	 *
	 * @param ClientesListRequest $clientes_list_request Lista os clientes cadastrados
	 * @return ClientesListResponse Lista de clientes cadastrados no omie.
	 */
	public function ListarClientesResumido(ClientesListRequest $clientes_list_request){
		return self::_Call('ListarClientesResumido',Array(
			$clientes_list_request
		));
	}

	/**
	 * Rotina para inclusão por lote de clientes.
	 *
	 * @param ClientesLoteRequest $clientes_lote_request Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
	 * @return ClientesLoteResponse Resposta do processamento do lote de clientes cadastrados.
	 */
	public function IncluirClientesPorLote(ClientesLoteRequest $clientes_lote_request){
		return self::_Call('IncluirClientesPorLote',Array(
			$clientes_lote_request
		));
	}

	/**
	 * Realiza o UPSERT da tabela de clientes (INCLUSÃO/ALTERAÇÃO).
	 *
	 * @param ClientesCadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return ClientesStatus Status de retorno do cadastro de clientes.
	 */
	public function UpsertCliente(ClientesCadastro $clientes_cadastro){
		return self::_Call('UpsertCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Inclui/Altera clientes por lote.
	 *
	 * @param ClientesLoteRequest $clientes_lote_request Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
	 * @return ClientesLoteResponse Resposta do processamento do lote de clientes cadastrados.
	 */
	public function UpsertClientesPorLote(ClientesLoteRequest $clientes_lote_request){
		return self::_Call('UpsertClientesPorLote',Array(
			$clientes_lote_request
		));
	}

	/**
	 * Associa um código de integração a um cliente cadastrado no Omie.
	 *
	 * @param ClientesCadastroChave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return ClientesStatus Status de retorno do cadastro de clientes.
	 */
	public function AssociarCodIntCliente(ClientesCadastroChave $clientes_cadastro_chave){
		return self::_Call('AssociarCodIntCliente',Array(
			$clientes_cadastro_chave
		));
	}
}