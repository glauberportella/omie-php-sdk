<?php

namespace Omie\Base\Servicos;


use Omie\Base\OmieMethodCallParamInterface;

/**
 * Cadastro de Ordem de Serviço
 *
 * @pw_element Cabecalho $Cabecalho Cabeçalho da Ordem de Serviço
 * @pw_element InformacoesAdicionais $InformacoesAdicionais Informações adicionais da OS&nbsp;
 * @pw_element Email $Email Informações do E-Mail
 * @pw_element DepartamentosArray $Departamentos Lista de distribuição por departamentos
 * @pw_element ServicosPrestadosArray $ServicosPrestados Lista de Serviços Prestados
 * @pw_element ParcelasArray $Parcelas Permite que o parcelamento seja realizado de forma manual.
 * @pw_element Observacoes $Observacoes Observações da Ordem de Serviço
 * @pw_complex osCadastro
 */
class OsCadastro implements OmieMethodCallParamInterface {
    /**
     * Cabeçalho da Ordem de Serviço
     *
     * @var Cabecalho
     */
    public $Cabecalho;
    /**
     * Informações adicionais da OS&nbsp;
     *
     * @var InformacoesAdicionais
     */
    public $InformacoesAdicionais;
    /**
     * Informações do E-Mail
     *
     * @var Email
     */
    public $Email;
    /**
     * Lista de distribuição por departamentos
     *
     * @var DepartamentosArray
     */
    public $Departamentos;
    /**
     * Lista de Serviços Prestados
     *
     * @var ServicosPrestadosArray
     */
    public $ServicosPrestados;
    /**
     * Permite que o parcelamento seja realizado de forma manual.
     *
     * @var ParcelasArray
     */
    public $Parcelas;
    /**
     * Observações da Ordem de Serviço
     *
     * @var Observacoes
     */
    public $Observacoes;
}