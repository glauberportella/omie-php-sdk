<?php
namespace Omie\Base\Clientes;

use Omie\Base\OmieMethodCallParamInterface;

/**
 * Cadastro reduzido de produtos
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $telefone1_ddd DDD Telefone<BR>Preenchimento Opcional.
 * @pw_element string $telefone1_numero Telefone para Contato<BR>Preenchimento Opcional.
 * @pw_element string $contato Nome para contato<BR>Preenchimento Opcional.
 * @pw_element string $endereco Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $endereco_numero Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $bairro Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $complemento Complemento para o Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $estado Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cSigla' do método 'ListarEstados' da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR>
 * @pw_element string $cidade Código da Cidade<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCod' do método 'PesquisarCidades' da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
 * @pw_element string $cep CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $codigo_pais Código do País<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCodigo' do método 'ListarPaises' da API<BR>http://app.omie.com.br/api/v1/geral/paises/<BR>para obter essa informação.
 * @pw_element string $telefone2_ddd DDD Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $telefone2_numero Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $fax_ddd DDD Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $fax_numero Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $email E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $homepage WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $inscricao_estadual Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $inscricao_municipal Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $inscricao_suframa Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $optante_simples_nacional Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $tipo_atividade Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCodigo' do método 'ListarTipoAtiv' da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
 * @pw_element string $cnae Código do CNAE - Fiscal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag 'nCodigo' do método 'ListarCNAE' da API<BR>http://app.omie.com.br/api/v1/produtos/cnae/<BR>para obter essa informação.
 * @pw_element string $produtor_rural Indica se o Cliente / Fornecedor é um Produtor Rural<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $contribuinte Indica se o cliente é contribuinte (S/N).<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $observacao Observação<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $recomendacao_atraso Código da Instrução de Protesto<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Recomendações" do cadastro do Cliente.
 * @pw_element tagsArray $tags Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
 * @pw_element info $info Informações sobre o cadastro do cliente.
 * @pw_element string $pessoa_fisica Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
 * @pw_element string $exterior Indica que é um tomador de serviço localizado no exterior<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
 * @pw_element string $logradouro DEPRECATED
 * @pw_element string $importado_api Importado pela API (S/N).
 * @pw_element string $bloqueado DEPRECATED
 * @pw_element string $cidade_ibge Código do IBGE para a Cidade.<BR><BR>Essa campo não tem efeito caso informado na inclusão do cliente.<BR><BR>Ela é retornada na listagem de clientes somente.<BR><BR>Não preencher esse campo.<BR><BR>
 * @pw_element decimal $valor_limite_credito Valor do Limite de Crédito Total.<BR><BR>Preenchimento opcional.
 * @pw_element string $bloquear_faturamento Bloquear o faturamento para o cliente (S/N).<BR><BR>Preenchimento opcional.
 * @pw_element recomendacoes $recomendacoes Recomendações do cliente.
 * @pw_element enderecoEntrega $enderecoEntrega Dados do Endereço de Entrega.
 * @pw_element string $nif NIF - Número de Identificação Fiscal.<BR><BR>Apenas para estrangeiros.
 * @pw_complex ClientesCadastro
 */
class ClientesCadastro implements OmieMethodCallParamInterface {
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
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public $razao_social;
	/**
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $cnpj_cpf;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $nome_fantasia;
	/**
	 * DDD Telefone<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $telefone1_ddd;
	/**
	 * Telefone para Contato<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $telefone1_numero;
	/**
	 * Nome para contato<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $contato;
	/**
	 * Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $endereco;
	/**
	 * Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $endereco_numero;
	/**
	 * Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $bairro;
	/**
	 * Complemento para o Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $complemento;
	/**
	 * Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cSigla' do método 'ListarEstados' da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public $estado;
	/**
	 * Código da Cidade<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCod' do método 'PesquisarCidades' da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public $cidade;
	/**
	 * CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $cep;
	/**
	 * Código do País<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCodigo' do método 'ListarPaises' da API<BR>http://app.omie.com.br/api/v1/geral/paises/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public $codigo_pais;
	/**
	 * DDD Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $telefone2_ddd;
	/**
	 * Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $telefone2_numero;
	/**
	 * DDD Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $fax_ddd;
	/**
	 * Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $fax_numero;
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
	 * Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_estadual;
	/**
	 * Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_municipal;
	/**
	 * Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $inscricao_suframa;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $optante_simples_nacional;
	/**
	 * Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag 'cCodigo' do método 'ListarTipoAtiv' da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public $tipo_atividade;
	/**
	 * Código do CNAE - Fiscal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag 'nCodigo' do método 'ListarCNAE' da API<BR>http://app.omie.com.br/api/v1/produtos/cnae/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public $cnae;
	/**
	 * Indica se o Cliente / Fornecedor é um Produtor Rural<BR>Preenchimento Opcional.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $produtor_rural;
	/**
	 * Indica se o cliente é contribuinte (S/N).<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar 'S' ou 'N'.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $contribuinte;
	/**
	 * Observação<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $observacao;
	/**
	 * Código da Instrução de Protesto<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Recomendações" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public $recomendacao_atraso;
	/**
	 * Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
	 *
	 * @var tagsArray
	 */
	public $tags;
	/**
	 * Informações sobre o cadastro do cliente.
	 *
	 * @var Info
	 */
	public $info;
	/**
	 * Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
	 *
	 * @var string
	 */
	public $pessoa_fisica;
	/**
	 * Indica que é um tomador de serviço localizado no exterior<BR>Preenchimento automático - Não informar.<BR><BR>Informar 'S' ou 'N'.
	 *
	 * @var string
	 */
	public $exterior;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public $logradouro;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public $importado_api;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public $bloqueado;
	/**
	 * Código do IBGE para a Cidade.<BR><BR>Essa campo não tem efeito caso informado na inclusão do cliente.<BR><BR>Ela é retornada na listagem de clientes somente.<BR><BR>Não preencher esse campo.<BR><BR>
	 *
	 * @var string
	 */
	public $cidade_ibge;
	/**
	 * Valor do Limite de Crédito Total.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public $valor_limite_credito;
	/**
	 * Bloquear o faturamento para o cliente (S/N).<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public $bloquear_faturamento;
	/**
	 * Recomendações do cliente.
	 *
	 * @var Recomendacoes
	 */
	public $recomendacoes;
	/**
	 * Dados do Endereço de Entrega.
	 *
	 * @var enderecoEntrega
	 */
	public $enderecoEntrega;
	/**
	 * NIF - Número de Identificação Fiscal.<BR><BR>Apenas para estrangeiros.
	 *
	 * @var string
	 */
	public $nif;
}