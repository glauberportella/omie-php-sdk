<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallParamInterface;

/**
 * Lista de Códigos para filtro de clientes
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_complex ClientesPorCodigo
 */
class ClientesPorCodigo implements OmieMethodCallParamInterface {
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public $codigo_cliente_omie;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public $codigo_cliente_integracao;
}