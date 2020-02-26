<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallParamInterface;

/**
 * Status de retorno do cadastro de clientes.
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $codigo_status Codigo do Status
 * @pw_element string $descricao_status Descrição do Status
 * @pw_complex ClientesStatus
 */
class ClientesStatus implements OmieMethodCallParamInterface {
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
	/**
	 * Codigo do Status
	 *
	 * @var string
	 */
	public $codigo_status;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public $descricao_status;
}