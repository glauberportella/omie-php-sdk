<?php

namespace Omie\Base\Servicos;


/**
 * Lista de RPS geradas para a Ordem de Serviço
 *
 * @pw_element integer $nLote Número do Lote de Envio da RPS
 * @pw_element string $cStatusLote Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_element string $cProtocolo Número do protocolo do envio do lote.
 * @pw_element string $nRps Número do Recibo Provisório de Serviços (RPS).
 * @pw_element string $cStatusRps Código do status da RPS.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_element string $nNfse Número da NFS-e gerada.
 * @pw_element string $cCodVerif Código de Verificação da NFS-e gerada.
 * @pw_element string $cCNPJ CNPJ do Prestador
 * @pw_element integer $cInscrMunicipal Inscrição Municipal do Prestador
 * @pw_element mensagensArray $mensagens Mensagens de comunicação com a Prefeitura
 * @pw_element string $xml_distr XML de distribuição da NF-e
 * @pw_element string $danfe Link para o DANFE da NF-e gerada.
 * @pw_complex ListaRpsNfse
 */
class ListaRpsNfse {
    /**
     * Número do Lote de Envio da RPS
     *
     * @var integer
     */
    public $nLote;
    /**
     * Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
     *
     * @var string
     */
    public $cStatusLote;
    /**
     * Número do protocolo do envio do lote.
     *
     * @var string
     */
    public $cProtocolo;
    /**
     * Número do Recibo Provisório de Serviços (RPS).
     *
     * @var string
     */
    public $nRps;
    /**
     * Código do status da RPS.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
     *
     * @var string
     */
    public $cStatusRps;
    /**
     * Número da NFS-e gerada.
     *
     * @var string
     */
    public $nNfse;
    /**
     * Código de Verificação da NFS-e gerada.
     *
     * @var string
     */
    public $cCodVerif;
    /**
     * CNPJ do Prestador
     *
     * @var string
     */
    public $cCNPJ;
    /**
     * Inscrição Municipal do Prestador
     *
     * @var integer
     */
    public $cInscrMunicipal;
    /**
     * Mensagens de comunicação com a Prefeitura
     *
     * @var mensagensArray
     */
    public $mensagens;
    /**
     * XML de distribuição da NF-e
     *
     * @var string
     */
    public $xml_distr;
    /**
     * Link para o DANFE da NF-e gerada.
     *
     * @var string
     */
    public $danfe;
}