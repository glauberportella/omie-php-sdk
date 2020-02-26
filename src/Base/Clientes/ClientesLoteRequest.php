<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallRequestInterface;

/**
 * Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element clientes_cadastroArray $clientes_cadastro Cadastro reduzido de produtos
 * @pw_complex ClientesLoteRequest
 */
class ClientesLoteRequest implements OmieMethodCallRequestInterface {
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public $lote;
	/**
	 * Cadastro reduzido de produtos
	 *
	 * @var clientes_cadastroArray
	 */
	public $clientes_cadastro;
}