<?php

namespace Omie\Base\Servicos;


/**
 * Resposta da solicitação do Status da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cNumContrato Número do Contrato de Venda
 * @pw_element string $cNumRecibo Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
 * @pw_element string $cNumPedido Número do Pedido do Cliente
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_element string $cCancelada "S" para Ordem de Serviço cancelada.
 * @pw_element string $cFaturada "S" para Ordem de Serviço faturada com sucesso.
 * @pw_element string $cAmbiente Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
 * @pw_element string $dDtInc Data de Inclusão da Ordem de Serviço
 * @pw_element string $cHrInc Hora de inclusão da Ordem de Serviço
 * @pw_element string $dDtAlt Data de Alteração da Ordem de Serviço
 * @pw_element string $cHrAlt Hora de Alteração da Ordem de Serviço
 * @pw_element string $dDtFat Data de Faturamento
 * @pw_element string $cHrFat Hora do Faturamento
 * @pw_element decimal $nValorTot Valor da Ordem de Serviço
 * @pw_element ListaRpsNfseArray $ListaRpsNfse Lista de RPS geradas para a Ordem de Serviço
 * @pw_complex osStatusResponse
 */
class OsStatusResponse {
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
     * Número do Contrato de Venda
     *
     * @var string
     */
    public $cNumContrato;
    /**
     * Número do Recibo gerado.<BR>(Gerado automaticamente. Se informado na inclusão será ignorado).
     *
     * @var string
     */
    public $cNumRecibo;
    /**
     * Número do Pedido do Cliente
     *
     * @var string
     */
    public $cNumPedido;
    /**
     * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
     *
     * @var string
     */
    public $cEtapa;
    /**
     * "S" para Ordem de Serviço cancelada.
     *
     * @var string
     */
    public $cCancelada;
    /**
     * "S" para Ordem de Serviço faturada com sucesso.
     *
     * @var string
     */
    public $cFaturada;
    /**
     * Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
     *
     * @var string
     */
    public $cAmbiente;
    /**
     * Data de Inclusão da Ordem de Serviço
     *
     * @var string
     */
    public $dDtInc;
    /**
     * Hora de inclusão da Ordem de Serviço
     *
     * @var string
     */
    public $cHrInc;
    /**
     * Data de Alteração da Ordem de Serviço
     *
     * @var string
     */
    public $dDtAlt;
    /**
     * Hora de Alteração da Ordem de Serviço
     *
     * @var string
     */
    public $cHrAlt;
    /**
     * Data de Faturamento
     *
     * @var string
     */
    public $dDtFat;
    /**
     * Hora do Faturamento
     *
     * @var string
     */
    public $cHrFat;
    /**
     * Valor da Ordem de Serviço
     *
     * @var decimal
     */
    public $nValorTot;
    /**
     * Lista de RPS geradas para a Ordem de Serviço
     *
     * @var ListaRpsNfse[]
     */
    public $ListaRpsNfse;
}