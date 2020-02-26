<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallResponseInterface;

/**
 * Resposta do processamento do lote de clientes cadastrados.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element string $codigo_status Codigo do Status
 * @pw_element string $descricao_status Descrição do Status
 * @pw_complex ClientesLoteResponse
 */
class ClientesLoteResponse implements OmieMethodCallResponseInterface {
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public $lote;
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