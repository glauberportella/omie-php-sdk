<?php

namespace Omie\Base\Servicos;


/**
 * Informações adicionais da OS
 *
 * @pw_element string $cCodCateg Categoria
 * @pw_element integer $nCodCC Código da Conta Corrente
 * @pw_element string $cNumPedido Número do Pedido do Cliente
 * @pw_element string $cNumContrato Número do Contrato de Venda
 * @pw_element string $cContato Contato
 * @pw_element string $cDadosAdicNF Dados Adicionais da Nota Fiscal
 * @pw_element string $cCodObra Código da Obra&nbsp;
 * @pw_element string $cCodART Código ART
 * @pw_element integer $nCodProj Código do Projeto
 * @pw_element string $cCidPrestServ Cidade da Prestação do Serviço
 * @pw_element string $dDataRps Data da RPS
 * @pw_element string $cNumRecibo Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
 * @pw_complex InformacoesAdicionais
 */
class InformacoesAdicionais {
    /**
     * Categoria
     *
     * @var string
     */
    public $cCodCateg;
    /**
     * Código da Conta Corrente
     *
     * @var integer
     */
    public $nCodCC;
    /**
     * Número do Pedido do Cliente
     *
     * @var string
     */
    public $cNumPedido;
    /**
     * Número do Contrato de Venda
     *
     * @var string
     */
    public $cNumContrato;
    /**
     * Contato
     *
     * @var string
     */
    public $cContato;
    /**
     * Dados Adicionais da Nota Fiscal
     *
     * @var string
     */
    public $cDadosAdicNF;
    /**
     * Código da Obra&nbsp;
     *
     * @var string
     */
    public $cCodObra;
    /**
     * Código ART
     *
     * @var string
     */
    public $cCodART;
    /**
     * Código do Projeto
     *
     * @var integer
     */
    public $nCodProj;
    /**
     * Cidade da Prestação do Serviço
     *
     * @var string
     */
    public $cCidPrestServ;
    /**
     * Data da RPS
     *
     * @var string
     */
    public $dDataRps;
    /**
     * Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
     *
     * @var string
     */
    public $cNumRecibo;
}