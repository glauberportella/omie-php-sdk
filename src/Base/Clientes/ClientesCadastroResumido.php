<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallParamInterface;

/**
 * Cadastro reduzido de produtos
 *
 * @pw_element integer $codigo_cliente Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_complex ClientesCadastroResumido
 */
class ClientesCadastroResumido implements OmieMethodCallParamInterface {
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public $codigo_cliente;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public $codigo_cliente_integracao;
	/**
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public $razao_social;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $nome_fantasia;
	/**
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $cnpj_cpf;
}