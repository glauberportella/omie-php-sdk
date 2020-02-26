<?php

namespace Omie\Base\ContaCorrente;


/**
 * Lista de contas correntes.
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $tipo_conta_corrente Tipo da Conta Corrente
 * @pw_element string $codigo_banco Código do banco
 * @pw_element string $descricao Descrição da conta corrente.
 * @pw_element string $codigo_agencia Código da Agência
 * @pw_element string $numero_conta_corrente Número da conta corrente.&nbsp;
 * @pw_element decimal $saldo_inicial Saldo Inicial da Conta Corrente
 * @pw_element string $saldo_data Data do Saldo Inicial da Conta Corrente
 * @pw_element decimal $valor_limite Valor do Limite do Crédito
 * @pw_element string $nao_fluxo Não exibir no Fluxo de Caixa
 * @pw_element string $nao_resumo Não exibir no Resumo de Finanças
 * @pw_element string $observacao Observação
 * @pw_element string $cobr_sn Indica se realiza Cobrança Bancária para a conta corrente [S/N]
 * @pw_element decimal $per_juros Percentual de Juros ao Mês
 * @pw_element decimal $per_multa Percentual de Multa
 * @pw_element string $bol_instr1 Mensagem de Instrução do Boleto - Linha 1
 * @pw_element string $bol_instr2 Mensagem de Instrução do Boleto - Linha 2
 * @pw_element string $bol_instr3 Mensagem de Instrução do Boleto - Linha 3
 * @pw_element string $bol_instr4 Mensagem de Instrução do Boleto - Linha 4
 * @pw_element string $bol_sn Indica se emite Boletos de Cobrança [S/N]
 * @pw_element string $cnab_esp Espécie padrão para a Remessa de Cobrança
 * @pw_element string $cobr_esp Espécie padrão para o Boleto de Cobrança
 * @pw_element integer $dias_rcomp Dias para Compensação dos Recebimentos
 * @pw_element string $modalidade Modalidade da Cobrança
 * @pw_element string $cancinstr Código de Instrução de Cancelamento, Baixa ou Devolução
 * @pw_element string $pdv_enviar Utiliza a Conta Corrente no OmiePDV
 * @pw_element string $pdv_sincr_analitica Sincroniza os Movimentos de Forma Análitica para o PDV
 * @pw_element integer $pdv_dias_venc Dias para vencimento&nbsp;
 * @pw_element integer $pdv_num_parcelas Número máximo de parcelas do Cartão de Credito
 * @pw_element integer $pdv_tipo_tef Tipo de TEF
 * @pw_element integer $pdv_cod_adm Código da Administradora de Cartões
 * @pw_element integer $pdv_limite_pacelas Limite máximo de parcelas
 * @pw_element decimal $pdv_taxa_loja Taxa de Juros da Loja
 * @pw_element decimal $pdv_taxa_adm Taxa da Administradora de Cartões
 * @pw_element string $pdv_categoria Código da Categoria para o PDV.
 * @pw_element string $cTipoCartao Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
 * @pw_element string $nome_gerente Nome do Gerente da Conta Corrente.
 * @pw_element string $ddd DDD do Telefone de Contato do Gerente da Agência
 * @pw_element string $telefone Telefone de Contato do Gerente da Agência
 * @pw_element string $email E-mail do Gerente da Conta Corrente
 * @pw_element string $endereco Endereço da Agência
 * @pw_element string $numero Número do Endereço
 * @pw_element string $bairro Bairro
 * @pw_element string $complemento Complemento do Número do Endereço
 * @pw_element string $estado Estado da Agência
 * @pw_element string $cidade Cidade da Agência
 * @pw_element string $cep CEP da Agência
 * @pw_element string $codigo_pais Código do País
 * @pw_element string $data_inc Data de Inclusão
 * @pw_element string $hora_inc Hora de Inclusão
 * @pw_element string $user_inc Usuário da Inclusão
 * @pw_element string $data_alt Data de alteração
 * @pw_element string $hora_alt Hora de Alteração
 * @pw_element string $user_alt Usuário de Alteração
 * @pw_element string $importado_api Registro importado pela API
 * @pw_element string $bloqueado Registro Bloqueado pela API&nbsp;
 * @pw_complex fin_conta_corrente_cadastro
 */
class FinContaCorrenteCadastro{
    /**
     * Código da conta corrente no Omie.
     *
     * @var integer
     */
    public $nCodCC;
    /**
     * Código de Integração do Parceiro.
     *
     * @var string
     */
    public $cCodCCInt;
    /**
     * Tipo da Conta Corrente
     *
     * @var string
     */
    public $tipo_conta_corrente;
    /**
     * Código do banco
     *
     * @var string
     */
    public $codigo_banco;
    /**
     * Descrição da conta corrente.
     *
     * @var string
     */
    public $descricao;
    /**
     * Código da Agência
     *
     * @var string
     */
    public $codigo_agencia;
    /**
     * Número da conta corrente.&nbsp;
     *
     * @var string
     */
    public $numero_conta_corrente;
    /**
     * Saldo Inicial da Conta Corrente
     *
     * @var decimal
     */
    public $saldo_inicial;
    /**
     * Data do Saldo Inicial da Conta Corrente
     *
     * @var string
     */
    public $saldo_data;
    /**
     * Valor do Limite do Crédito
     *
     * @var decimal
     */
    public $valor_limite;
    /**
     * Não exibir no Fluxo de Caixa
     *
     * @var string
     */
    public $nao_fluxo;
    /**
     * Não exibir no Resumo de Finanças
     *
     * @var string
     */
    public $nao_resumo;
    /**
     * Observação
     *
     * @var string
     */
    public $observacao;
    /**
     * Indica se realiza Cobrança Bancária para a conta corrente [S/N]
     *
     * @var string
     */
    public $cobr_sn;
    /**
     * Percentual de Juros ao Mês
     *
     * @var decimal
     */
    public $per_juros;
    /**
     * Percentual de Multa
     *
     * @var decimal
     */
    public $per_multa;
    /**
     * Mensagem de Instrução do Boleto - Linha 1
     *
     * @var string
     */
    public $bol_instr1;
    /**
     * Mensagem de Instrução do Boleto - Linha 2
     *
     * @var string
     */
    public $bol_instr2;
    /**
     * Mensagem de Instrução do Boleto - Linha 3
     *
     * @var string
     */
    public $bol_instr3;
    /**
     * Mensagem de Instrução do Boleto - Linha 4
     *
     * @var string
     */
    public $bol_instr4;
    /**
     * Indica se emite Boletos de Cobrança [S/N]
     *
     * @var string
     */
    public $bol_sn;
    /**
     * Espécie padrão para a Remessa de Cobrança
     *
     * @var string
     */
    public $cnab_esp;
    /**
     * Espécie padrão para o Boleto de Cobrança
     *
     * @var string
     */
    public $cobr_esp;
    /**
     * Dias para Compensação dos Recebimentos
     *
     * @var integer
     */
    public $dias_rcomp;
    /**
     * Modalidade da Cobrança
     *
     * @var string
     */
    public $modalidade;
    /**
     * Código de Instrução de Cancelamento, Baixa ou Devolução
     *
     * @var string
     */
    public $cancinstr;
    /**
     * Utiliza a Conta Corrente no OmiePDV
     *
     * @var string
     */
    public $pdv_enviar;
    /**
     * Sincroniza os Movimentos de Forma Análitica para o PDV
     *
     * @var string
     */
    public $pdv_sincr_analitica;
    /**
     * Dias para vencimento&nbsp;
     *
     * @var integer
     */
    public $pdv_dias_venc;
    /**
     * Número máximo de parcelas do Cartão de Credito
     *
     * @var integer
     */
    public $pdv_num_parcelas;
    /**
     * Tipo de TEF
     *
     * @var integer
     */
    public $pdv_tipo_tef;
    /**
     * Código da Administradora de Cartões
     *
     * @var integer
     */
    public $pdv_cod_adm;
    /**
     * Limite máximo de parcelas
     *
     * @var integer
     */
    public $pdv_limite_pacelas;
    /**
     * Taxa de Juros da Loja
     *
     * @var decimal
     */
    public $pdv_taxa_loja;
    /**
     * Taxa da Administradora de Cartões
     *
     * @var decimal
     */
    public $pdv_taxa_adm;
    /**
     * Código da Categoria para o PDV.
     *
     * @var string
     */
    public $pdv_categoria;
    /**
     * Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
     *
     * @var string
     */
    public $cTipoCartao;
    /**
     * Nome do Gerente da Conta Corrente.
     *
     * @var string
     */
    public $nome_gerente;
    /**
     * DDD do Telefone de Contato do Gerente da Agência
     *
     * @var string
     */
    public $ddd;
    /**
     * Telefone de Contato do Gerente da Agência
     *
     * @var string
     */
    public $telefone;
    /**
     * E-mail do Gerente da Conta Corrente
     *
     * @var string
     */
    public $email;
    /**
     * Endereço da Agência
     *
     * @var string
     */
    public $endereco;
    /**
     * Número do Endereço
     *
     * @var string
     */
    public $numero;
    /**
     * Bairro
     *
     * @var string
     */
    public $bairro;
    /**
     * Complemento do Número do Endereço
     *
     * @var string
     */
    public $complemento;
    /**
     * Estado da Agência
     *
     * @var string
     */
    public $estado;
    /**
     * Cidade da Agência
     *
     * @var string
     */
    public $cidade;
    /**
     * CEP da Agência
     *
     * @var string
     */
    public $cep;
    /**
     * Código do País
     *
     * @var string
     */
    public $codigo_pais;
    /**
     * Data de Inclusão
     *
     * @var string
     */
    public $data_inc;
    /**
     * Hora de Inclusão
     *
     * @var string
     */
    public $hora_inc;
    /**
     * Usuário da Inclusão
     *
     * @var string
     */
    public $user_inc;
    /**
     * Data de alteração
     *
     * @var string
     */
    public $data_alt;
    /**
     * Hora de Alteração
     *
     * @var string
     */
    public $hora_alt;
    /**
     * Usuário de Alteração
     *
     * @var string
     */
    public $user_alt;
    /**
     * Registro importado pela API
     *
     * @var string
     */
    public $importado_api;
    /**
     * Registro Bloqueado pela API&nbsp;
     *
     * @var string
     */
    public $bloqueado;
}