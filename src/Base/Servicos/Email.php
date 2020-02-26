<?php

namespace Omie\Base\Servicos;


/**
 * Informações do E-Mail
 *
 * @pw_element string $cEnvRecibo Enviar um recibo de prestação de serviços (ao invés da NFS-e)
 * @pw_element string $cEnvLink Enviar ao Cliente e-mail com o link do site da prefeitura para consultar  a NFSe emitida.
 * @pw_element string $cEnvBoleto Enviar ao Cliente e-mail com os Boletos de Cobrança gerados pelo faturamento.
 * @pw_element string $cEnviarPara Utilizar os seguintes endereços de e-mail
 * @pw_complex Email
 */
class Email {
    /**
     * Enviar um recibo de prestação de serviços (ao invés da NFS-e)
     *
     * @var string
     */
    public $cEnvRecibo;
    /**
     * Enviar ao Cliente e-mail com o link do site da prefeitura para consultar  a NFSe emitida.
     *
     * @var string
     */
    public $cEnvLink;
    /**
     * Enviar ao Cliente e-mail com os Boletos de Cobrança gerados pelo faturamento.
     *
     * @var string
     */
    public $cEnvBoleto;
    /**
     * Utilizar os seguintes endereços de e-mail
     *
     * @var string
     */
    public $cEnviarPara;
}