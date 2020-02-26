<?php

namespace Omie\Base;

/**
 * Dados do Endereço de Entrega.
 *
 * @pw_element string $entCnpjCpf CNPJ / CPF do recebedor.
 * @pw_element string $entEndereco Endereço.
 * @pw_element string $entNumero Número do endereço.
 * @pw_element string $entComplemento Complemento do endereço.
 * @pw_element string $entBairro Bairro.
 * @pw_element string $entCEP CEP
 * @pw_element string $entEstado Estado.
 * @pw_element string $entCidade Cidade
 * @pw_complex enderecoEntrega
 */
class EnderecoEntrega{
	/**
	 * CNPJ / CPF do recebedor.
	 *
	 * @var string
	 */
	public $entCnpjCpf;
	/**
	 * Endereço.
	 *
	 * @var string
	 */
	public $entEndereco;
	/**
	 * Número do endereço.
	 *
	 * @var string
	 */
	public $entNumero;
	/**
	 * Complemento do endereço.
	 *
	 * @var string
	 */
	public $entComplemento;
	/**
	 * Bairro.
	 *
	 * @var string
	 */
	public $entBairro;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public $entCEP;
	/**
	 * Estado.
	 *
	 * @var string
	 */
	public $entEstado;
	/**
	 * Cidade
	 *
	 * @var string
	 */
	public $entCidade;
}