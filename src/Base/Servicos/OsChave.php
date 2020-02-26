<?php

namespace Omie\Base\Servicos;


/**
 * Chave de Pesquisa da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_complex osChave
 */
class OsChave{
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
}