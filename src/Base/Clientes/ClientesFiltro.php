<?php

namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallParamInterface;

/**
 * Filtrar cadastro de clientes
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $endereco Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $bairro Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $cidade Código da Cidade<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCod' do método 'PesquisarCidades' da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
 * @pw_element string $estado Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cSigla' do método 'ListarEstados' da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR>
 * @pw_element string $cep CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $contato Nome para contato<BR>Preenchimento Opcional.
 * @pw_element string $email E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $homepage WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $inscricao_municipal Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $inscricao_estadual Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $inscricao_suframa Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $pessoa_fisica Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
 * @pw_element string $optante_simples_nacional Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_complex ClientesFiltro
 */
class ClientesFiltro implements OmieMethodCallParamInterface {
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
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $cnpj_cpf;
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
	 * Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $endereco;
	/**
	 * Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $bairro;
	/**
	 * Código da Cidade<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCod' do método 'PesquisarCidades' da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public $cidade;
	/**
	 * Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cSigla' do método 'ListarEstados' da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public $estado;
	/**
	 * CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $cep;
	/**
	 * Nome para contato<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $contato;
	/**
	 * E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $email;
	/**
	 * WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $homepage;
	/**
	 * Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_municipal;
	/**
	 * Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_estadual;
	/**
	 * Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_suframa;
	/**
	 * Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
	 *
	 * @var string
	 */
	public $pessoa_fisica;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $optante_simples_nacional;
}