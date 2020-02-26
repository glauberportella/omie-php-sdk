<?php

namespace Omie\Base\Servicos;


/**
 * Mensagens de comunicação com a Prefeitura
 *
 * @pw_element string $cCodigo Código da mensagem de Erro/Aviso
 * @pw_element string $cDescricao Descrição da mensagem de erro/aviso.
 * @pw_element string $cCorrecao Correção da descrição de mensagem de erro/aviso.
 * @pw_complex mensagens
 */
class Mensagens {
    /**
     * Código da mensagem de Erro/Aviso
     *
     * @var string
     */
    public $cCodigo;
    /**
     * Descrição da mensagem de erro/aviso.
     *
     * @var string
     */
    public $cDescricao;
    /**
     * Correção da descrição de mensagem de erro/aviso.
     *
     * @var string
     */
    public $cCorrecao;
}