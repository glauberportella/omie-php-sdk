<?php
namespace Omie\Base\Paises;

/**
 * Solicitação de Listagem de Paises.
 *
 * @pw_element string $filtrar_por_codigo Código do País (IBGE).<BR>Preenchimento Opcional.
 * @pw_element string $filtrar_por_descricao Descrição do País.<BR>Preenchimento Opcional.
 * @pw_complex paisListarRequest
 */
class PaisListarRequest{
    /**
     * Código do País (IBGE).<BR>Preenchimento Opcional.
     *
     * @var string
     */
    public $filtrar_por_codigo;
    /**
     * Descrição do País.<BR>Preenchimento Opcional.
     *
     * @var string
     */
    public $filtrar_por_descricao;
}