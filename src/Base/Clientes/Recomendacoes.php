<?php

namespace Omie\Base\Clientes;

/**
 * Recomendações do cliente.
 *
 * @pw_element string $numero_parcelas Número de Parcelas padrão para as Vendas.
 * @pw_element integer $codigo_vendedor Código do Vendedor padrão.
 * @pw_element string $email_fatura Enviar a NF-e e Boleto para outro e-mail?
 * @pw_element string $gerar_boletos Por padrão: Gerar Boletos ao Emitir NF-e?
 * @pw_complex Recomendacoes
 */
class Recomendacoes{
	/**
	 * Número de Parcelas padrão para as Vendas.
	 *
	 * @var string
	 */
	public $numero_parcelas;
	/**
	 * Código do Vendedor padrão.
	 *
	 * @var integer
	 */
	public $codigo_vendedor;
	/**
	 * Enviar a NF-e e Boleto para outro e-mail?
	 *
	 * @var string
	 */
	public $email_fatura;
	/**
	 * Por padrão: Gerar Boletos ao Emitir NF-e?
	 *
	 * @var string
	 */
	public $gerar_boletos;
}