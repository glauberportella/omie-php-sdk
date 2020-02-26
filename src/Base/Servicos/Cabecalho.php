<?php

namespace Omie\Base\Servicos;


/**
 * Cabeçalho da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cCodIntCli Código de Integração do Cliente
 * @pw_element integer $nCodCli Código do Cliente
 * @pw_element string $dDtPrevisao Data de Previsão
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element integer $nQtdeParc Quantidade de Parcelas&nbsp;
 * @pw_element string $cCodParc Código do parcelamento
 * @pw_complex Cabecalho
 */
class Cabecalho {
    /**
     * Código de Integração da OS
     *
     * @var string
     */
    public $cCodIntOS;
    /**
     * Código da Ordem de Serviço
     *
     * @var integer
     */
    public $nCodOS;
    /**
     * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
     *
     * @var string
     */
    public $cNumOS;
    /**
     * Código de Integração do Cliente
     *
     * @var string
     */
    public $cCodIntCli;
    /**
     * Código do Cliente
     *
     * @var integer
     */
    public $nCodCli;
    /**
     * Data de Previsão
     *
     * @var string
     */
    public $dDtPrevisao;
    /**
     * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
     *
     * @var string
     */
    public $cEtapa;
    /**
     * Código do Vendedor
     *
     * @var integer
     */
    public $nCodVend;
    /**
     * Quantidade de Parcelas&nbsp;
     *
     * @var integer
     */
    public $nQtdeParc;
    /**
     * Código do parcelamento
     *
     * @var string
     */
    public $cCodParc;
}